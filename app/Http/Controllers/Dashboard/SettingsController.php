<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use CachetHQ\Cachet\Models\User;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SettingsController extends Controller
{
    /**
     * Array of sub-menu items.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new settings controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subMenu = [
            'setup' => [
                'title'  => trans('dashboard.settings.app-setup.app-setup'),
                'url'    => route('dashboard.settings.setup'),
                'icon'   => 'ion-gear-b',
                'active' => false,
            ],
            'theme' => [
                'title'  => trans('dashboard.settings.theme.theme'),
                'url'    => route('dashboard.settings.theme'),
                'icon'   => 'ion-paintbrush',
                'active' => false,
            ],
            'stylesheet' => [
                'title'  => trans('dashboard.settings.stylesheet.stylesheet'),
                'url'    => route('dashboard.settings.stylesheet'),
                'icon'   => 'ion-paintbucket',
                'active' => false,
            ],
            'localization' => [
                'title'  => trans('dashboard.settings.localization.localization'),
                'url'    => route('dashboard.settings.localization'),
                'icon'   => 'ion-earth',
                'active' => false,
            ],
            'security' => [
                'title'  => trans('dashboard.settings.security.security'),
                'url'    => route('dashboard.settings.security'),
                'icon'   => 'ion-lock-combination',
                'active' => false,
            ],
            'analytics' => [
                'title'  => trans('dashboard.settings.analytics.analytics'),
                'url'    => route('dashboard.settings.analytics'),
                'icon'   => 'ion-stats-bars',
                'active' => false,
            ],
            'about' => [
                'title'  => CACHET_VERSION,
                'url'    => 'javascript: void(0);',
                'icon'   => 'ion-flag',
                'active' => false,
            ],
        ];

        View::share([
            'sub_title' => trans('dashboard.settings.settings'),
            'sub_menu'  => $this->subMenu,
        ]);
    }

    /**
     * Shows the settings setup view.
     *
     * @return \Illuminate\View\View
     */
    public function showSetupView()
    {
        $this->subMenu['setup']['active'] = true;

        Session::flash('redirect_to', $this->subMenu['setup']['url']);

        return View::make('dashboard.settings.app-setup')
            ->withPageTitle(trans('dashboard.settings.app-setup.app-setup').' - '.trans('dashboard.dashboard'))
            ->withSubMenu($this->subMenu)
            ->withRawAppAbout(Config::get('setting.app_about'));
    }

    /**
     * Shows the settings analytics view.
     *
     * @return \Illuminate\View\View
     */
    public function showAnalyticsView()
    {
        $this->subMenu['analytics']['active'] = true;

        Session::flash('redirect_to', $this->subMenu['analytics']['url']);

        return View::make('dashboard.settings.analytics')
            ->withPageTitle(trans('dashboard.settings.analytics.analytics').' - '.trans('dashboard.dashboard'))
            ->withSubMenu($this->subMenu);
    }

    /**
     * Shows the settings localization view.
     *
     * @return \Illuminate\View\View
     */
    public function showLocalizationView()
    {
        $this->subMenu['localization']['active'] = true;

        Session::flash('redirect_to', $this->subMenu['localization']['url']);

        return View::make('dashboard.settings.localization')
            ->withPageTitle(trans('dashboard.settings.localization.localization').' - '.trans('dashboard.dashboard'))
            ->withSubMenu($this->subMenu);
    }

    /**
     * Shows the settings theme view.
     *
     * @return \Illuminate\View\View
     */
    public function showThemeView()
    {
        $this->subMenu['theme']['active'] = true;

        Session::flash('redirect_to', $this->subMenu['theme']['url']);

        return View::make('dashboard.settings.theme')
            ->withPageTitle(trans('dashboard.settings.theme.theme').' - '.trans('dashboard.dashboard'))
            ->withSubMenu($this->subMenu);
    }

    /**
     * Shows the settings security view.
     *
     * @return \Illuminate\View\View
     */
    public function showSecurityView()
    {
        $this->subMenu['security']['active'] = true;

        $unsecureUsers = User::whereNull('google_2fa_secret')->orWhere('google_2fa_secret', '')->get();

        Session::flash('redirect_to', $this->subMenu['security']['url']);

        return View::make('dashboard.settings.security')
            ->withPageTitle(trans('dashboard.settings.security.security').' - '.trans('dashboard.dashboard'))
            ->withSubMenu($this->subMenu)
            ->withUnsecureUsers($unsecureUsers);
    }

    /**
     * Shows the settings stylesheet view.
     *
     * @return \Illuminate\View\View
     */
    public function showStylesheetView()
    {
        $this->subMenu['stylesheet']['active'] = true;

        Session::flash('redirect_to', $this->subMenu['stylesheet']['url']);

        return View::make('dashboard.settings.stylesheet')
            ->withPageTitle(trans('dashboard.settings.stylesheet.stylesheet').' - '.trans('dashboard.dashboard'))
            ->withSubMenu($this->subMenu);
    }

    /**
     * Updates the status page settings.
     *
     * @return \Illuminate\View\View
     */
    public function postSettings()
    {
        $redirectUrl = Session::get('redirect_to', route('dashboard.settings.setup'));

        $setting = app('setting');

        if (Binput::get('remove_banner') === '1') {
            $setting->set('app_banner', null);
        }

        if (Binput::hasFile('app_banner')) {
            $file = Binput::file('app_banner');

            // Image Validation.
            // Image size in bytes.
            $maxSize = $file->getMaxFilesize();

            if ($file->getSize() > $maxSize) {
                return Redirect::to($redirectUrl)->withErrors(trans('dashboard.settings.app-setup.too-big', ['size' => $maxSize]));
            }

            if (!$file->isValid() || $file->getError()) {
                return Redirect::to($redirectUrl)->withErrors($file->getErrorMessage());
            }

            if (!starts_with($file->getMimeType(), 'image/')) {
                return Redirect::to($redirectUrl)->withErrors(trans('dashboard.settings.app-setup.images-only'));
            }

            // Store the banner.
            $setting->set('app_banner', base64_encode(file_get_contents($file->getRealPath())));

            // Store the banner type.
            $setting->set('app_banner_type', $file->getMimeType());
        }

        try {
            foreach (Binput::except(['app_banner', 'remove_banner']) as $settingName => $settingValue) {
                if ($settingName === 'app_analytics_pi_url') {
                    $settingValue = rtrim($settingValue, '/');
                }

                $setting->set($settingName, $settingValue);
            }
        } catch (Exception $e) {
            return Redirect::to($redirectUrl)->withErrors(trans('dashboard.settings.edit.failure'));
        }

        if (Binput::has('app_locale')) {
            Lang::setLocale(Binput::get('app_locale'));
        }

        return Redirect::to($redirectUrl)->withSuccess(trans('dashboard.settings.edit.success'));
    }
}
