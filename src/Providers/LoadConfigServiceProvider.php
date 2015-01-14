<?php

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;

class LoadConfigServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
        $appDomain = Setting::get('app_domain');
        $appTimezone = Setting::get('app_timezone');
        $appLocale = Setting::get('app_locale');

        Config::set('app.url', $appDomain ?: Config::get('app.url'));
        Config::set('app.timezone', $appTimezone ?: Config::get('app.timezone'));
        Config::set('app.locale', $appLocale ?: Config::get('app.locale'));
        Lang::setLocale($appLocale);
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
