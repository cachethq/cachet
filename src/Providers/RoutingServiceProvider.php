<?php

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $files = glob(app_path('routes').'/*.php');

        foreach ($files as $file) {
            require $file;
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
