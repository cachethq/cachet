<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console;

use Illuminate\Console\Scheduling\Schedule;

class Scheduler
{
    /**
     * Define the schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    public function schedule(Schedule $schedule)
    {
        $schedule->command('cachet:beacon')->twiceDaily('00:00', '12:00');
    }
}
