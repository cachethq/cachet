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

use CachetHQ\Cachet\Models\Schedule;

/**
 * This is the schedule was removed event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ScheduleWasRemovedEvent implements ScheduleEventInterface
{
    /**
     * The schedule that has been removed.
     *
     * @var \CachetHQ\Cachet\Models\Schedule
     */
    public $schedule;

    /**
     * Create a new schedule was removed event instance.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return void
     */
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }
}
