<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the api routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ApiSystemRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = false;

    /**
     * Define the api routes for the system status, ping and version.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'namespace'  => 'Api',
            'prefix'     => 'api/v1',
        ], function (Registrar $router) {
            $router->group(['middleware' => ['auth.api']], function (Registrar $router) {
                $router->get('ping', 'GeneralController@ping');
                $router->get('version', 'GeneralController@version');
                $router->get('status', ['uses' => 'GeneralController@status', 'middleware' => ['cache']]);
            });
        });
    }
}
