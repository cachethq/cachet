<?php

class DashSettingsController extends Controller
{
    protected $subMenu = [];
    protected $subTitle = 'Settings';

    public function __construct()
    {
        $this->subMenu = [
            'setup' => [
                'title'  => 'Application Setup',
                'url'    => '/dashboard/settings/setup',
                'icon'   => 'ion-gear-b',
                'active' => false,
            ],
            'security' => [
                'title'  => 'Security',
                'url'    => '/dashboard/settings/security',
                'icon'   => 'ion-lock-combination',
                'active' => false,
            ],
            'theme' => [
                'title'  => 'Theme',
                'url'    => '/dashboard/settings/theme',
                'icon'   => 'ion-paintbrush',
                'active' => false,
            ],
            'stylesheet' => [
                'title'  => 'Stylesheet',
                'url'    => '/dashboard/settings/stylesheet',
                'icon'   => 'ion-paintbucket',
                'active' => false,
            ],
        ];

        View::share('subTitle', $this->subTitle);
        View::share('subMenu', $this->subMenu);
    }

    /**
     * Shows the settings setup view.
     *
     * @return \Illuminate\View\View
     */
    public function showSetupView()
    {
        $this->subMenu['setup']['active'] = true;

        return View::make('dashboard.settings-app-setup')->with([
            'pageTitle' => 'Application Setup - Dashboard',
            'subMenu'   => $this->subMenu,
        ]);
    }

    /**
     * Shows the settings theme view.
     *
     * @return \Illuminate\View\View
     */
    public function showThemeView()
    {
        $this->subMenu['theme']['active'] = true;

        return View::make('dashboard.settings-theme')->with([
            'pageTitle' => 'Theme - Dashboard',
            'subMenu'   => $this->subMenu,
        ]);
    }

    /**
     * Shows the settings security view.
     *
     * @return \Illuminate\View\View
     */
    public function showSecurityView()
    {
        $this->subMenu['security']['active'] = true;

        return View::make('dashboard.settings-security')->with([
            'pageTitle' => 'Security - Dashboard',
            'subMenu'   => $this->subMenu,
        ]);
    }

    /**
     * Shows the settings stylesheet view.
     *
     * @return \Illuminate\View\View
     */
    public function showStylesheetView()
    {
        $this->subMenu['stylesheet']['active'] = true;

        return View::make('dashboard.settings-stylesheet')->with([
            'pageTitle' => 'Stylesheet - Dashboard',
            'subMenu'   => $this->subMenu,
        ]);
    }

    /**
     * Updates the statsu page settings.
     *
     * @return \Illuminate\View\View
     */
    public function postSettings()
    {
        // Fetch all of the settings we've been POSTed.
        $settings = Input::all();

        try {
            foreach ($settings as $settingName => $settingValue) {
                $setting = Setting::firstOrCreate([
                    'name' => $settingName,
                ])->update([
                    'value' => $settingValue,
                ]);
            }
        } catch (Exception $e) {
            return Redirect::back()->withSaved(false);
        }

        return Redirect::back()->withSaved(true);
    }
}
