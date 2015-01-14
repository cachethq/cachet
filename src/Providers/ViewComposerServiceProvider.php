<?php

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->view->composer('index', 'CachetHQ\Cachet\Composers\IndexComposer');
        $this->app->view->composer([
            'setup',
            'dashboard.settings.app-setup',
        ], 'CachetHQ\Cachet\Composers\TimezoneLocaleComposer');
    }
}
