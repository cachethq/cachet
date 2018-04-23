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

use CachetHQ\Cachet\Bus\Commands\System\Config\UpdateConfigCommand;
use CachetHQ\Cachet\Integrations\Contracts\Credits;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Notifications\System\SystemTestNotification;
use CachetHQ\Cachet\Settings\Repository;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Log\Writer;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Monolog\Handler\SyslogHandler;

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
                'url'    => cachet_route('dashboard.settings.setup'),
                'icon'   => 'ion-gear-b',
                'active' => false,
            ],
            'theme' => [
                'title'  => trans('dashboard.settings.theme.theme'),
                'url'    => cachet_route('dashboard.settings.theme'),
                'icon'   => 'ion-paintbrush',
                'active' => false,
            ],
            'stylesheet' => [
                'title'  => trans('dashboard.settings.stylesheet.stylesheet'),
                'url'    => cachet_route('dashboard.settings.stylesheet'),
                'icon'   => 'ion-paintbucket',
                'active' => false,
            ],
            'customization' => [
                'title'  => trans('dashboard.settings.customization.customization'),
                'url'    => cachet_route('dashboard.settings.customization'),
                'icon'   => 'ion-wand',
                'active' => false,
            ],
            'localization' => [
                'title'  => trans('dashboard.settings.localization.localization'),
                'url'    => cachet_route('dashboard.settings.localization'),
                'icon'   => 'ion-earth',
                'active' => false,
            ],
            'security' => [
                'title'  => trans('dashboard.settings.security.security'),
                'url'    => cachet_route('dashboard.settings.security'),
                'icon'   => 'ion-lock-combination',
                'active' => false,
            ],
            'analytics' => [
                'title'  => trans('dashboard.settings.analytics.analytics'),
                'url'    => cachet_route('dashboard.settings.analytics'),
                'icon'   => 'ion-stats-bars',
                'active' => false,
            ],
            'log' => [
                'title'  => trans('dashboard.settings.log.log'),
                'url'    => cachet_route('dashboard.settings.log'),
                'icon'   => 'ion-document-text',
                'active' => false,
            ],
            'credits' => [
                'title'  => trans('dashboard.settings.credits.credits'),
                'url'    => cachet_route('dashboard.settings.credits'),
                'icon'   => 'ion-ios-list',
                'active' => false,
            ],
            'mail' => [
                'title'  => trans('dashboard.settings.mail.mail'),
                'url'    => cachet_route('dashboard.settings.mail'),
                'icon'   => 'ion-paper-airplane',
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
     * Shows the settings customization view.
     *
     * @return \Illuminate\View\View
     */
    public function showCustomizationView()
    {
        $this->subMenu['customization']['active'] = true;

        Session::flash('redirect_to', $this->subMenu['customization']['url']);

        return View::make('dashboard.settings.customization')
            ->withPageTitle(trans('dashboard.settings.customization.customization').' - '.trans('dashboard.dashboard'))
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

        $unsecureUsers = User::whereNull('google_2fa_secret')->orWhere('google_2fa_secret', '=', '')->get();

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
     * Show the credits view.
     *
     * @return \Illuminate\View\View
     */
    public function showCreditsView()
    {
        $this->subMenu['credits']['active'] = true;

        $credits = app(Credits::class)->latest();

        $backers = $credits['backers'];
        $contributors = $credits['contributors'];

        shuffle($backers);
        shuffle($contributors);

        return View::make('dashboard.settings.credits')
            ->withPageTitle(trans('dashboard.settings.credits.credits').' - '.trans('dashboard.dashboard'))
            ->withBackers($backers)
            ->withContributors($contributors)
            ->withSubMenu($this->subMenu);
    }

    /**
     * Show the most recent log.
     *
     * @return \Illuminate\View\View
     */
    public function showLogView()
    {
        $this->subMenu['log']['active'] = true;

        $log = app(Writer::class)->getMonolog();

        $logContents = '';

        collect($log->getHandlers())->reject(function ($handler) {
            return $handler instanceof SyslogHandler;
        })->each(function ($handler) use (&$logContents, $log) {
            if (file_exists($path = $log->getHandlers()[0]->getUrl())) {
                $logContents = file_get_contents($path);
            }
        });

        return View::make('dashboard.settings.log')->withLog($logContents)->withSubMenu($this->subMenu);
    }

    /**
     * Show the mail settings view.
     *
     * @return \Illuminate\View\View
     */
    public function showMailView()
    {
        $this->subMenu['mail']['active'] = true;

        return View::make('dashboard.settings.mail')->withConfig(Config::get('mail'));
    }

    /**
     * Test the mail config.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function testMail()
    {
        Auth::user()->notify(new SystemTestNotification());

        return cachet_redirect('dashboard.settings.mail')
            ->withSuccess(trans('dashboard.notifications.awesome'));
    }

    /**
     * Handle updating of the settings.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postMail()
    {
        $config = Binput::get('config');

        dispatch(new UpdateConfigCommand($config));

        return cachet_redirect('dashboard.settings.mail')
            ->withInput(Binput::all())
            ->withSuccess(trans('dashboard.notifications.awesome'));
    }

    /**
     * Updates the status page settings.
     *
     * @return \Illuminate\View\View
     */
    public function postSettings()
    {
        $setting = app(Repository::class);

        if (Binput::get('remove_banner') === '1') {
            $setting->set('app_banner', null);
        }

        $parameters = Binput::all();

        if (isset($parameters['header'])) {
            if ($header = Binput::get('header', null, false, false)) {
                $setting->set('header', $header);
            } else {
                $setting->delete('header');
            }
        }

        if (isset($parameters['footer'])) {
            if ($footer = Binput::get('footer', null, false, false)) {
                $setting->set('footer', $footer);
            } else {
                $setting->delete('footer');
            }
        }

        if (isset($parameters['stylesheet'])) {
            if ($stylesheet = Binput::get('stylesheet', null, false, false)) {
                $setting->set('stylesheet', $stylesheet);
            } else {
                $setting->delete('stylesheet');
            }
        }

        if (Binput::hasFile('app_banner')) {
            $this->handleUpdateBanner($setting);
        }

        $excludedParams = [
            '_token',
            'app_banner',
            'remove_banner',
            'header',
            'footer',
            'stylesheet',
        ];

        try {
            foreach (Binput::except($excludedParams) as $settingName => $settingValue) {
                if ($settingName === 'app_analytics_pi_url') {
                    $settingValue = rtrim($settingValue, '/');
                }

                $setting->set($settingName, $settingValue);
            }
        } catch (Exception $e) {
            return Redirect::back()->withErrors(trans('dashboard.settings.edit.failure'));
        }

        if (Binput::has('app_locale')) {
            Lang::setLocale(Binput::get('app_locale'));
        }

        if (Binput::has('always_authenticate')) {
            Artisan::call('route:clear');
        }

        return Redirect::back()->withSuccess(trans('dashboard.settings.edit.success'));
    }

    /**
     * Handle updating of the banner image.
     *
     * @param \CachetHQ\Cachet\Settings\Repository $setting
     *
     * @return void
     */
    protected function handleUpdateBanner(Repository $setting)
    {
        $file = Binput::file('app_banner');
        $redirectUrl = $this->subMenu['theme']['url'];

        // Image Validation.
        // Image size in bytes.
        $maxSize = $file->getMaxFilesize();

        if ($file->getSize() > $maxSize) {
            return Redirect::to($redirectUrl)->withErrors(trans('dashboard.settings.app-setup.too-big', ['size' => $maxSize]));
        }

        if (!$file->isValid() || $file->getError()) {
            return Redirect::to($redirectUrl)->withErrors($file->getErrorMessage());
        }

        if (!Str::startsWith($file->getMimeType(), 'image/')) {
            return Redirect::to($redirectUrl)->withErrors(trans('dashboard.settings.app-setup.images-only'));
        }

        // Store the banner.
        $setting->set('app_banner', base64_encode(file_get_contents($file->getRealPath())));

        // Store the banner type.
        $setting->set('app_banner_type', $file->getMimeType());
    }
}
