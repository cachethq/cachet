<?php

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Config\Repository;
use CachetHQ\Cachet\Models\Setting as SettingModel;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
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
        $this->app->bindShared('setting', function ($app) {
            return new Repository(new SettingModel());
        });
    }
}
