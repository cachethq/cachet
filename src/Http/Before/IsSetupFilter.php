<?php

namespace CachetHQ\Cachet\Http\Before;

use CachetHQ\Cachet\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class IsSetupFilter
{
    public function filter(Route $route, Request $request)
    {
        try {
            $setting = Setting::where('name', 'app_name')->first();
            if ($setting->value) {
                return Redirect::to('/dashboard');
            }
        } catch (Exception $e) {
            // do nothing
        }
    }
}
