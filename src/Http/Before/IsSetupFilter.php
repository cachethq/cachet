<?php

namespace CachetHQ\Cachet\Http\Before;

use CachetHQ\Cachet\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class IsSetupFilter
{
    /**
     * Run the is setup filter.
     *
     * We're verifying that Cachet is correctly setup. If it is, they we're
     * sending the user to the dashboard so they can use Cachet.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response|null
     */
    public function filter(Route $route, Request $request)
    {
        try {
            $setting = Setting::where('name', 'app_name')->first();
            if ($setting && $setting->value) {
                return Redirect::to('/dashboard');
            }
        } catch (Exception $e) {
            // do nothing
        }
    }
}
