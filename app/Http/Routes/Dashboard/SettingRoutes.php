<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes\Dashboard;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the dashboard setting routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class SettingRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Define the dashboard setting routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['auth'],
            'namespace'  => 'Dashboard',
            'prefix'     => 'dashboard/settings',
        ], function (Registrar $router) {
            $router->get('setup', [
                'as'   => 'get:dashboard.settings.setup',
                'uses' => 'SettingsController@showSetupView',
            ]);
            $router->get('analytics', [
                'as'   => 'get:dashboard.settings.analytics',
                'uses' => 'SettingsController@showAnalyticsView',
            ]);
            $router->get('localization', [
                'as'   => 'get:dashboard.settings.localization',
                'uses' => 'SettingsController@showLocalizationView',
            ]);
            $router->get('security', [
                'as'   => 'get:dashboard.settings.security',
                'uses' => 'SettingsController@showSecurityView',
            ]);
            $router->get('theme', [
                'as'   => 'get:dashboard.settings.theme',
                'uses' => 'SettingsController@showThemeView',
            ]);
            $router->get('stylesheet', [
                'as'   => 'get:dashboard.settings.stylesheet',
                'uses' => 'SettingsController@showStylesheetView',
            ]);
            $router->get('customization', [
                'as'   => 'get:dashboard.settings.customization',
                'uses' => 'SettingsController@showCustomizationView',
            ]);
            $router->get('credits', [
                'as'   => 'get:dashboard.settings.credits',
                'uses' => 'SettingsController@showCreditsView',
            ]);
            $router->get('log', [
                'as'   => 'get:dashboard.settings.log',
                'uses' => 'SettingsController@showLogView',
            ]);

            $router->post('/', [
                'as'   => 'post:dashboard.settings',
                'uses' => 'SettingsController@postSettings',
            ]);
        });
    }
}
