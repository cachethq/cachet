<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\Schedule;

use App\Bus\Events\ActionInterface;
use App\Models\Schedule;
use App\Models\User;

/**
 * This is the schedule was created event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ScheduleWasCreatedEvent implements ActionInterface, ScheduleEventInterface
{
    /**
     * The user that created the schedule.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The schedule that has been created.
     *
     * @var \App\Models\Schedule
     */
    public $schedule;

    /**
     * Whether to notify that the incident was reported.
     *
     * @var bool
     */
    public $notify;

    /**
     * Create a new schedule was created event instance.
     *
     * @param \App\Models\User     $user
     * @param \App\Models\Schedule $schedule
     * @param bool notify
     *
     * @return void
     */
    public function __construct(User $user, Schedule $schedule, $notify = false)
    {
        $this->user = $user;
        $this->schedule = $schedule;
        $this->notify = $notify;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Schedule was created.';
    }

    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction()
    {
        return [
            'user'        => $this->user,
            'description' => (string) $this,
        ];
    }
}
