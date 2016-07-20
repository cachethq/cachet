<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use Illuminate\Contracts\Config\Repository;
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class SubscriberController extends Controller
{
    /**
     * Shows the subscribers view.
     *
     * @return \Illuminate\View\View
     */
    public function showSubscribers()
    {
        return View::make('dashboard.subscribers.index')
            ->withPageTitle(trans('dashboard.subscribers.subscribers').' - '.trans('dashboard.dashboard'))
            ->withSubscribers(Subscriber::all());
    }

    /**
     * Shows the add subscriber view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddSubscriber()
    {
        return View::make('dashboard.subscribers.add')
            ->withPageTitle(trans('dashboard.subscribers.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Creates a new subscriber.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createSubscriberAction()
    {
        $verified = app(Repository::class)->get('setting.skip_subscriber_verification'));

        try {
            $subscribers = preg_split("/\r\n|\n|\r/", Binput::get('email'));

            foreach ($subscribers as $subscriber) {
                dispatch(new SubscribeSubscriberCommand($subscriber, $verified));
            }
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.subscribers.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.subscribers.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.subscribers.add')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.subscribers.add.success')));
    }

    /**
     * Deletes a subscriber.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteSubscriberAction(Subscriber $subscriber)
    {
        dispatch(new UnsubscribeSubscriberCommand($subscriber));

        return Redirect::route('dashboard.subscribers.index');
    }
}
