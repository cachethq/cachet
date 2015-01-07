<?php

namespace CachetHQ\Cachet\Http\Before;

use CachetHQ\Cachet\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class LoadConfigFilter
{
    /**
     * Load confit to override values filter.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return null
     */
    public function filter(Request $request)
    {
        // Always allow our own domain.
        $appDomain = Setting::get('app_domain');
        $appTimezone = Setting::get('app_timezone');
        $appLocale = Setting::get('app_locale');

        Config::set('app.url', $appDomain ?: Config::get('app.url'));
        Config::set('app.timezone', $appTimezone ?: Config::get('app.timezone'));
        Config::set('app.locale', $appLocale ?: Config::get('app.locale'));
        Lang::setLocale($appLocale);
    }
}
