<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Events\Incident;

use App\Bus\Events\Incident\IncidentWasCreatedEvent;
use App\Integrations\Contracts\System;
use App\Models\Subscriber;
use App\Notifications\Incident\NewIncidentNotification;

class SendIncidentEmailNotificationHandler
{
    /**
     * The system instance.
     *
     * @var \App\Integrations\Contracts\System
     */
    protected $system;

    /**
     * The subscriber instance.
     *
     * @var \App\Models\Subscriber
     */
    protected $subscriber;

    /**
     * Create a new send incident email notification handler.
     *
     * @param \App\Integrations\Contracts\System $system
     * @param \App\Models\Subscriber             $subscriber
     *
     * @return void
     */
    public function __construct(System $system, Subscriber $subscriber)
    {
        $this->system = $system;
        $this->subscriber = $subscriber;
    }

    /**
     * Handle the event.
     *
     * @param \App\Bus\Events\Incident\IncidentWasCreatedEvent $event
     *
     * @return void
     */
    public function handle(IncidentWasCreatedEvent $event)
    {
        $incident = $event->incident;

        if (!$event->notify || !$this->system->canNotifySubscribers()) {
            return false;
        }

        // Only send emails for public incidents.
        if (!$incident->visible) {
            return;
        }

        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get();

        $globalSubscribers->each(function ($subscriber) use ($incident) {
            $subscriber->notify(new NewIncidentNotification($incident));
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
            })->each(function ($subscriber) use ($incident) {
                $subscriber->notify(new NewIncidentNotification($incident));
            });
    }
}
