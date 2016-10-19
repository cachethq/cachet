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
 * This is the dashboard base routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class BaseRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Define the dashboard base routes.
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
        ], function (Registrar $router) {
            $router->get('admin', 'DashboardController@redirectAdmin');

            $router->group(['prefix' => 'dashboard'], function (Registrar $router) {
                $router->get('/', [
                    'as'   => 'get:dashboard',
                    'uses' => 'DashboardController@showDashboard',
                ]);
            });
        });
    }
}
