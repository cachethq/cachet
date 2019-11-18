<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Events\Schedule;

use App\Bus\Events\Schedule\ScheduleEventInterface;
use App\Models\Subscriber;
use App\Notifications\Schedule\NewScheduleNotification;

/**
 * This is the send schedule event notification handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SendScheduleEmailNotificationHandler
{
    /**
     * The subscriber instance.
     *
     * @var \App\Models\Subscriber
     */
    protected $subscriber;

    /**
     * Create a new send schedule email notification handler.
     *
     * @param \App\Models\Subscriber $subscriber
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
     * @param \App\Bus\Events\Schedule\ScheduleEventInterface $event
     *
     * @return void
     */
    public function handle(ScheduleEventInterface $event)
    {
        $schedule = $event->schedule;
        if (!$event->notify) {
            return false;
        }

        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get()->each(function ($subscriber) use ($schedule) {
            $subscriber->notify(new NewScheduleNotification($schedule));
        });
    }
}
