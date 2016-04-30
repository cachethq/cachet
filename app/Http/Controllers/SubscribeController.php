<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriptionCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Bus\Exceptions\Subscriber\AlreadySubscribedException;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Subscription;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * This is the subscribe controller.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SubscribeController extends Controller
{
    /**
     * Show the subscribe by email page.
     *
     * @return \Illuminate\View\View
     */
    public function showSubscribe()
    {
        return View::make('subscribe.subscribe')
            ->withAboutApp(Markdown::convertToHtml(Config::get('setting.app_about')));
    }

    /**
     * Handle the subscribe user.
     *
     * @return \Illuminate\View\View
     */
    public function postSubscribe()
    {
        $email = Binput::get('email');
        $subscriptions = Binput::get('subscriptions');

        try {
            $verified = false;

            $subscription = dispatch(new SubscribeSubscriberCommand($email, $verified));
        } catch (ValidationException $e) {
            return Redirect::route('status-page')
                ->withInput(Binput::all())
                ->withTitle(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.whoops'), trans('cachet.subscriber.email.failure')))
                ->withErrors($e->getMessageBag());
        }

        $message = $subscription->is_verified ?
            trans('cachet.subscriber.email.already-subscribed', ['email' => $email]) :
            trans('cachet.subscriber.email.subscribed');

        return Redirect::route('subscribe.manage', $subscription->verify_code)
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), $message));
    }

    /**
     * Handle the verify subscriber email.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function getVerify($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $subscriber = Subscriber::where('verify_code', '=', $code)->first();

        if (!$subscriber) {
            throw new BadRequestHttpException();
        }

        if (!$subscriber->is_verified) {
            dispatch(new VerifySubscriberCommand($subscriber));
        }

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.verified')));
    }

    /**
     * Handle the unsubscribe.
     *
     * @param string|null $code
     * @param int|null    $subscription
     *
     * @return \Illuminate\View\View
     */
    public function getUnsubscribe($code = null, $subscription = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $subscriber = Subscriber::where('verify_code', '=', $code)->first();

        if (!$subscriber || !$subscriber->is_verified) {
            throw new BadRequestHttpException();
        }

        if ($subscription) {
            dispatch(new UnsubscribeSubscriptionCommand(Subscription::forSubscriber($subscriber->id)->firstOrFail()));
        } else {
            dispatch(new UnsubscribeSubscriberCommand($subscriber, $subscription));
        }

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.unsubscribed')));
    }

    /**
     * Shows the subscription manager page.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function showManage($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $subscriber = Subscriber::where('verify_code', '=', $code)->first();

        if (!$subscriber) {
            throw new BadRequestHttpException();
        }

        return View::make('subscribe.manage')
            ->withComponents(Component::all())
            ->withSubscriber($subscriber)
            ->withSubscriptions($subscriber->subscriptions->pluck('component_id')->all());
    }

    /**
     * Updates the subscription manager for a subscriber.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function postManage($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $subscriber = Subscriber::where('verify_code', '=', $code)->first();

        if (!$subscriber) {
            throw new BadRequestHttpException();
        }

        try {
            dispatch(new UpdateSubscriberSubscriptionCommand($subscriber, Binput::get('subscriptions')));
        } catch (ValidationException $e) {
            dd($e->getMessageBag());
            return Redirect::route('subscribe.manage', $subscriber->verify_code)
                ->withInput(Binput::all())
                ->withTitle(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.whoops'), trans('cachet.subscriber.email.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('subscribe.manage', $subscriber->verify_code)
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.subscribed')));
    }
}
