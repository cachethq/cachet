<?php

namespace CachetHQ\Cachet\Http\Before;

use CachetHQ\Cachet\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class HasSettingFilter
{
    public function filter(Route $route, Request $request, $settingName)
    {
        try {
            $setting = Setting::where('name', $settingName)->first();
            if (!$setting->value) {
                return Redirect::to('setup');
            }
        } catch (Exception $e) {
            return Redirect::to('setup');
        }
    }
}
