<?php

namespace CachetHQ\Cachet\Foundation\Providers;

use Illuminate\Support\ServiceProvider;

class ScheduleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('schedulers', function ($app) {
            return array_map([$app, 'make'], (array) $app['config']->get('app.schedulers', []));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['schedulers'];
    }
}
