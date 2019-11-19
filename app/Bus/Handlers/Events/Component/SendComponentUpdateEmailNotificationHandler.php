<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Events\Component;

use App\Bus\Events\Component\ComponentStatusWasChangedEvent;
use App\Integrations\Contracts\System;
use App\Models\Component;
use App\Models\Subscriber;
use App\Notifications\Component\ComponentStatusChangedNotification;

class SendComponentUpdateEmailNotificationHandler
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
     * @param \App\Models\Subscriber $subscriber
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
     * @param \App\Bus\Events\Component\ComponentStatusWasChangedEvent $event
     *
     * @return void
     */
    public function handle(ComponentStatusWasChangedEvent $event)
    {
        $component = $event->component;

        // If we're silent or the notifications are suppressed don't send this.
        if ($event->silent || !$this->system->canNotifySubscribers()) {
            return;
        }

        // Don't email anything if the status hasn't changed.
        if ($event->original_status === $event->new_status) {
            return;
        }

        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get();

        $globalSubscribers->each(function ($subscriber) use ($component, $event) {
            $subscriber->notify(new ComponentStatusChangedNotification($component, $event->new_status));
        });

        $notified = $globalSubscribers->pluck('id')->all();

        // Notify the remaining component specific subscribers.
        $componentSubscribers = $this->subscriber
            ->isVerified()
            ->forComponent($component->id)
            ->get()
            ->reject(function ($subscriber) use ($notified) {
                return in_array($subscriber->id, $notified);
            });

        $componentSubscribers->each(function ($subscriber) use ($component, $event) {
            $subscriber->notify(new ComponentStatusChangedNotification($component, $event->new_status));
        });
    }
}
