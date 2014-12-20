<?php

class IsSetupFilter {
    public function filter($route, $request) {
        try {
            $setting = Setting::where('name', 'app_name')->first();
            if ($setting->value) {
                return Redirect::to('/dashboard');
            }
        } catch (Exception $e) {
        }
    }
}
