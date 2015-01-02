<?php

namespace CachetHQ\Cachet\Http\Before;

use CachetHQ\Cachet\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class HasSettingFilter
{
    /**
     * Run the has setting filter.
     *
     * We're verifying that the given setting exists in our database. If it
     * doesn't, then we're sending the user to the setup page so that they can
     * complete the installation of Cachet on their server.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Illuminate\Http\Request  $request
     * @param string                    $settingName
     *
     * @return \Illuminate\Http\Response|null
     */
    public function filter(Route $route, Request $request, $settingName)
    {
        try {
            $setting = Setting::where('name', $settingName)->first();
            if (!$setting || !$setting->value) {
                return Redirect::to('setup');
            }
        } catch (Exception $e) {
            return Redirect::to('setup');
        }
    }
}
