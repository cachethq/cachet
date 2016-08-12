<?php

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
