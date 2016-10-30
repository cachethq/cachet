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
     * Define the dashboard setting routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['web', 'auth'],
            'namespace'  => 'Dashboard',
            'as'         => 'dashboard.settings.',
            'prefix'     => 'dashboard/settings',
        ], function (Registrar $router) {
            $router->get('setup', [
                'as'   => 'setup',
                'uses' => 'SettingsController@showSetupView',
            ]);
            $router->get('analytics', [
                'as'   => 'analytics',
                'uses' => 'SettingsController@showAnalyticsView',
            ]);
            $router->get('localization', [
                'as'   => 'localization',
                'uses' => 'SettingsController@showLocalizationView',
            ]);
            $router->get('security', [
                'as'   => 'security',
                'uses' => 'SettingsController@showSecurityView',
            ]);
            $router->get('theme', [
                'as'   => 'theme',
                'uses' => 'SettingsController@showThemeView',
            ]);
            $router->get('stylesheet', [
                'as'   => 'stylesheet',
                'uses' => 'SettingsController@showStylesheetView',
            ]);
            $router->get('customization', [
                'as'   => 'customization',
                'uses' => 'SettingsController@showCustomizationView',
            ]);
            $router->get('credits', [
                'as'   => 'credits',
                'uses' => 'SettingsController@showCreditsView',
            ]);
            $router->get('log', [
                'as'   => 'log',
                'uses' => 'SettingsController@showLogView',
            ]);
            $router->post('/', 'SettingsController@postSettings');
        });
    }
}
