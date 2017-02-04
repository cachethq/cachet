<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Schedule;

use CachetHQ\Cachet\Bus\Events\ActionInterface;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Models\User;

/**
 * This is the schedule was removed event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ScheduleWasRemovedEvent implements ActionInterface, ScheduleEventInterface
{
    /**
     * The user that removed the schedule.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The schedule that has been removed.
     *
     * @var \CachetHQ\Cachet\Models\Schedule
     */
    public $schedule;

    /**
     * Create a new schedule was removed event instance.
     *
     * @param \CachetHQ\Cachet\Models\User     $user
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
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
        return 'Schedule was removed.';
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
