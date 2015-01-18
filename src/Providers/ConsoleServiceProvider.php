<?php

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Console\Commands\FixPermissionsCommand;
use CachetHQ\Cachet\Console\Commands\OneClickDeployCommand;
use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands('CachetHQ\Cachet\Console\Commands\FixPermissionsCommand');
        $this->commands('CachetHQ\Cachet\Console\Commands\OneClickDeployCommand');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('CachetHQ\Cachet\Console\Commands\FixPermissionsCommand', function ($app) {
            $storageDirectory = $app['path.storage'];
            $databaseDirectory = $app['path'].'/database';
            $databasePath = $app->config->get('database.connections.sqlite.database');
            $databaseDefault = $app->config->get('database.default');

            return new FixPermissionsCommand($storageDirectory, $databaseDirectory, $databasePath, $databaseDefault);
        });

        $this->app->singleton('CachetHQ\Cachet\Console\Commands\OneClickDeployCommand', function ($app) {
            return new OneClickDeployCommand($app->environment('heroku'));
        });
    }
}
