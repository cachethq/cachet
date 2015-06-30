<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use CachetHQ\Cachet\Events\CustomerHasSubscribedEvent;
use CachetHQ\Cachet\Http\Controllers\AbstractController;
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class SubscriberController extends AbstractController
{
    /**
     * Shows the subscribers view.
     *
     * @return \Illuminate\View\View
     */
    public function showSubscribers()
    {
        $subscribers = Subscriber::all();

        return View::make('dashboard.subscribers.index')
            ->with([
                'page_title'  => trans('dashboard.subscribers.subscribers').' - '.trans('dashboard.dashboard'),
                'subscribers' => $subscribers,
            ]);
    }

    /**
     * Shows the add subscriber view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddSubscriber()
    {
        return View::make('dashboard.subscribers.add')
            ->with([
                'page_title'        => trans('dashboard.subscribers.add.title').' - '.trans('dashboard.dashboard'),
                'incidentTemplates' => Subscriber::all(),
            ]);
    }

    /**
     * Creates a new subscriber.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createSubscriberAction()
    {
        $email = Binput::get('email');

        $subscriber = Subscriber::create([
            'email' => $email,
        ]);

        if (!$subscriber->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Created Subscriber',
                'success' => false,
            ]);

            return Redirect::back()
                ->withInput(Binput::all())
                ->with('title', sprintf(
                    '%s %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.subscribers.add.failure')
                ))
                ->with('errors', $subscriber->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Created Subscriber',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '%s %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.subscribers.add.success')
        );

        event(new CustomerHasSubscribedEvent($subscriber));

        return Redirect::back()
            ->with('success', $successMsg);
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
        segment_track('Dashboard', [
            'event' => 'Deleted Subscriber',
        ]);

        $subscriber->delete();

        return Redirect::back();
    }
}
