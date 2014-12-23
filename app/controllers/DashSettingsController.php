<?php

class DashSettingsController extends Controller
{
    /**
     * Shows the settings view.
     * @return \Illuminate\View\View
     */
    public function showSettings()
    {
        return View::make('dashboard.settings')->with([
            'pageTitle' => 'Settings - Dashboard',
        ]);
    }

    /**
     * Updates the statsu page settings.
     * @return \Illuminate\View\View
     */
    public function postSettings()
    {
        // Fetch all of the settings we've been POSTed.
        $settings = Input::all();

        foreach ($settings as $settingName => $settingValue) {
            if (strstr($settingName, 'style_')) {
                $settingValue = str_replace('#', '', $settingValue);
            }

            $setting = Setting::firstOrCreate([
                'name' => $settingName,
            ])->update([
                'value' => $settingValue,
            ]);
        }

        return Redirect::back();
    }
}
