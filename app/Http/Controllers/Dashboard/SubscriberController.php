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
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Routing\Controller;
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
            ->withPageTitle(trans('dashboard.subscribers.subscribers') . ' - ' . trans('dashboard.dashboard'))
            ->withSubscribers(Subscriber::with('subscriptions.component')->get());
    }

    /**
     * Shows the add subscriber view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddSubscriber()
    {
        return View::make('dashboard.subscribers.add')
            ->withPageTitle(trans('dashboard.subscribers.add.title') . ' - ' . trans('dashboard.dashboard'));
    }

    /**
     * Creates a new subscriber.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createSubscriberAction()
    {
        $verified = app(Repository::class)->get('setting.skip_subscriber_verification');

        try {
            $subscribers = preg_split("/\r\n|\n|\r/", Binput::get('email'));

            foreach ($subscribers as $subscriber) {
                if(filter_var($subscriber, FILTER_VALIDATE_EMAIL)) {
                    execute(new SubscribeSubscriberCommand($subscriber, $verified));
                }
                elseif(preg_match('/^(?=(?:\+)(?:(?:\d){7,10})?(?:[\-\.\/ \t\f]?\d{2,3})(?:[\-\s]?[ext]{1,3}[\-\.\/ \t\f]?\d{1,4})?$)((?:\+|0{2})\d{0,3})?(?:[\-\.\/ \t\f]?)(\(0\d[ ]?\d{0,4}\)|\(\d{0,4}\)|\d{0,4})(?:[\-\.\/ \t\f]{0,2}\d){3,8}(?:[\-\s]?(?:x|ext)[\-\t\f ]?(\d{1,4}))?$/', $subscriber)) {
                    execute(new SubscribeSubscriberCommand(verified:$verified, phone_number:$subscriber));
                }
                else{
                    throw new \Symfony\Component\Mime\Exception\RfcComplianceException;
                }
            }
        } catch (ValidationException | \Symfony\Component\Mime\Exception\RfcComplianceException | \Twilio\Exceptions\RestException $e) {
            return cachet_redirect('dashboard.subscribers.create')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.subscribers.add.failure')))
                ->withErrors($e->getMessage());
        }

        return cachet_redirect('dashboard.subscribers.create')
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
        execute(new UnsubscribeSubscriberCommand($subscriber));

        return cachet_redirect('dashboard.subscribers');
    }
}