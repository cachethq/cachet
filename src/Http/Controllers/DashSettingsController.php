<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Setting;
use DateTime;
use DateTimeZone;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class DashSettingsController extends Controller
{
    protected $subMenu = [];
    protected $subTitle = 'Settings';

    public function __construct()
    {
        $this->subMenu = [
            'setup' => [
                'title'  => trans('dashboard.settings.app-setup.app-setup'),
                'url'    => '/dashboard/settings/setup',
                'icon'   => 'ion-gear-b',
                'active' => false,
            ],
            'security' => [
                'title'  => trans('dashboard.settings.security.security'),
                'url'    => '/dashboard/settings/security',
                'icon'   => 'ion-lock-combination',
                'active' => false,
            ],
            'theme' => [
                'title'  => trans('dashboard.settings.theme.theme'),
                'url'    => '/dashboard/settings/theme',
                'icon'   => 'ion-paintbrush',
                'active' => false,
            ],
            'stylesheet' => [
                'title'  => trans('dashboard.settings.stylesheet.stylesheet'),
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
        $langs = [
            'de'    => 'Deutsch',
            'en'    => 'English',
            'fr'    => 'Français',
            'pt-BR' => 'Portuguese, Brazilian',
        ];

        $regions = [
            'Africa'     => DateTimeZone::AFRICA,
            'America'    => DateTimeZone::AMERICA,
            'Antarctica' => DateTimeZone::ANTARCTICA,
            'Asia'       => DateTimeZone::ASIA,
            'Atlantic'   => DateTimeZone::ATLANTIC,
            'Europe'     => DateTimeZone::EUROPE,
            'Indian'     => DateTimeZone::INDIAN,
            'Pacific'    => DateTimeZone::PACIFIC,
        ];

        $timezones = [];

        foreach ($regions as $name => $mask) {
            $zones = DateTimeZone::listIdentifiers($mask);

            foreach ($zones as $timezone) {
                // Lets sample the time there right now
                $time = new DateTime(null, new DateTimeZone($timezone));

                // Us dumb Americans can't handle millitary time
                $ampm = $time->format('H') > 12 ? ' ('.$time->format('g:i a').')' : '';

                // Remove region name and add a sample time
                $timezones[$name][$timezone] = substr($timezone, strlen($name) + 1).' - '.$time->format('H:i').$ampm;

                $timezones[$name] = str_replace('_', ' ', $timezones[$name]);
            }
        }

        $this->subMenu['setup']['active'] = true;

        return View::make('dashboard.settings.app-setup')->with([
            'pageTitle' => 'Application Setup - Dashboard',
            'subMenu'   => $this->subMenu,
            'timezones' => $timezones,
            'langs'     => $langs,
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
        if (Binput::get('remove_banner') === '1') {
            $setting = Setting::where('name', 'app_banner');
            $setting->delete();
        }

        if (Binput::hasFile('app_banner')) {
            $file = Binput::file('app_banner');

            // Image Validation.
            // Image size in bytes.
            $maxSize = $file->getMaxFilesize();

            if ($file->getSize() > $maxSize) {
                return Redirect::back()->withErrors(trans('dashboard.settings.app-setup.too-big', ['size' => $maxSize]));
            }

            if (!$file->isValid() || $file->getError()) {
                return Redirect::back()->withErrors($file->getErrorMessage());
            }

            if (strpos($file->getMimeType(), 'image/') !== 0) {
                return Redirect::back()->withErrors(trans('dashboard.settings.app-setup.images-only'));
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
            foreach (Binput::except(['app_banner', 'remove_banner']) as $settingName => $settingValue) {
                Setting::firstOrCreate([
                    'name' => $settingName,
                ])->update([
                    'value' => $settingValue,
                ]);
            }
        } catch (Exception $e) {
            return Redirect::back()->with('errors', trans('dashboard.settings.edit.failure'));
        }

        return Redirect::back()->with('success', trans('dashboard.settings.edit.success'));
    }
}
