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

use Illuminate\Console\Application;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * This is the console kernel class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class Kernel extends ConsoleKernel
{
    /**
     * Get the artisan application instance.
     *
     * @return \Illuminate\Console\Application
     */
    protected function getArtisan()
    {
        if (!$this->artisan) {
            $this->artisan = new Application($this->app, $this->events, $this->app->version());

            foreach (glob(app_path('Console//Commands').'/*.php') as $file) {
                $commands[] = 'CachetHQ\\Cachet\\Console\\Commands\\'.basename($file, '.php');
            }

            $this->artisan->resolveCommands($commands);
        }

        return $this->artisan;
    }

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('cachet:beacon')->twiceDaily(0, 12);

        $schedule->command('cachet:tsa')->everyMinute();
    }
}
