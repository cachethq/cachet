<?php

class HasSettingFilter
{
    public function filter($route, $request, $settingName)
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
