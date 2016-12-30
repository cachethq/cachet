<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\IncidentUpdate;

use CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasReportedEvent;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Notifications\IncidentUpdate\IncidentUpdatedNotification;

class SendIncidentUpdateEmailNotificationHandler
{
    /**
     * The subscriber instance.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    protected $subscriber;

    /**
     * Create a new send incident email notification handler.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasReportedEvent $event
     *
     * @return void
     */
    public function handle(IncidentUpdateWasReportedEvent $event)
    {
        $update = $event->update;
        $incident = $update->incident;

        // Only send emails for public incidents.
        if (!$incident->visible) {
            return;
        }

        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get();

        $globalSubscribers->map(function ($subscriber) use ($update) {
            $subscriber->notify(new IncidentUpdatedNotification($update));
        });

        if (!$incident->component) {
            return;
        }

        $notified = $globalSubscribers->pluck('id')->all();

        // Notify the remaining component specific subscribers.
        $componentSubscribers = $this->subscriber
            ->isVerified()
            ->forComponent($incident->component->id)
            ->get()
            ->reject(function ($subscriber) use ($notified) {
                return in_array($subscriber->id, $notified);
            })->map(function ($subscriber) use ($incident) {
                $subscriber->notify(new IncidentUpdatedNotification($incident));
            });
    }
}
