<?php

namespace CachetHQ\Cachet\Filters;

class NoSetupFilter {
    public function filter($route, $request, $settingName) {
        try {
            $setting = Setting::where('name', $settingName)->first();
            if ($setting->value) {
                return Response::make('Unauthorized', 401);
            }
        } catch (Exception $e) {
        }
    }
}