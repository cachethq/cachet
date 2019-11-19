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
 * This is the schedule was updated event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ScheduleWasUpdatedEvent implements ActionInterface, ScheduleEventInterface
{
    /**
     * The user that created the schedule.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The schedule that has been updated.
     *
     * @var \App\Models\Schedule
     */
    public $schedule;

    /**
     * Create a new schedule was updated event instance.
     *
     * @param \App\Models\User     $user
     * @param \App\Models\Schedule $schedule
     *
     * @return void
     */
    public function __construct(User $user, Schedule $schedule)
    {
        $this->user = $user;
        $this->schedule = $schedule;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Schedule was updated.';
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
