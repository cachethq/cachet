<?php

namespace CachetHQ\Cachet\Controllers;

use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Setting;

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

        return View::make('dashboard.settings.app-setup')->with([
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

        return View::make('dashboard.settings.theme')->with([
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

        return View::make('dashboard.settings.security')->with([
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

        return View::make('dashboard.settings.stylesheet')->with([
            'pageTitle' => 'Stylesheet - Dashboard',
            'subMenu'   => $this->subMenu,
        ]);
    }

    /**
     * Updates the status page settings.
     *
     * @return \Illuminate\View\View
     */
    public function postSettings()
    {
        if (Input::has('remove_banner') && Input::get('remove_banner') == "1") {
            $setting = Setting::where('name', 'app_banner');
            $setting->delete();
        }

        if (Input::hasFile('app_banner')) {
            $file = Input::file('app_banner');

            // Image Validation.
            // Image size in bytes.
            $maxSize = $file->getMaxFilesize();

            if ($file->getSize() > $maxSize) {
                return Redirect::back()->withErrorMessage('You need to upload an image that is less than '.$maxSize.'.');
            }

            if (!$file->isValid() || $file->getError()) {
                return Redirect::back()->withErrorMessage($file->getErrorMessage());
            }

            if (strpos($file->getMimeType(), 'image/') !== 0) {
                return Redirect::back()->withErrorMessage('Only images may be uploaded.');
            }

            // Store the banner.
            Setting::firstOrCreate([
                'name' => 'app_banner',
            ])->update([
                'value' => base64_encode(file_get_contents($file->getRealPath())),
            ]);

            // Store the banner type
            Setting::firstOrCreate([
                'name' => 'app_banner_type',
            ])->update([
                'value' => $file->getMimeType(),
            ]);
        }

        try {
            foreach (Input::except(['app_banner', 'remove_banner']) as $settingName => $settingValue) {
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
