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
 * This is the dashboard plugin routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class PluginRoutes
{
    /**
     * Define the dashboard plugin routes.
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
            'as'         => 'plugins.',
            'prefix'     => 'plugins',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'PluginController@showPlugins',
            ]);
            $router->get('install', [
                'as'   => 'install',
                'uses' => 'PluginController@showInstallPlugin',
            ]);
            $router->post('install', 'PluginController@installPluginAction');
            $router->delete('{plugin}/uninstall', 'PluginController@uninstallPluginAction');
            $router->get('{plugin}/enable', 'PluginController@enablePluginAction');
            $router->get('{plugin}/disable', 'PluginController@disablePluginAction');
        });
    }
}
