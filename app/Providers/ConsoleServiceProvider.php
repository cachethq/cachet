<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Console\Commands\FixPermissionsCommand;
use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('CachetHQ\Cachet\Console\Commands\FixPermissionsCommand', function ($app) {
            $storageDirectory = storage_path();
            $databaseDirectory = base_path('database');
            $databasePath = $app->config->get('database.connections.sqlite.database');
            $databaseDefault = $app->config->get('database.default');

            return new FixPermissionsCommand($storageDirectory, $databaseDirectory, $databasePath, $databaseDefault);
        });
    }
}
