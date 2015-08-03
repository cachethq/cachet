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

class AuthRoutes
{
    /**
     * Define the auth routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group(['prefix'         => 'auth'], function ($router) {
            $router->group(['middleware' => 'app.hasSetting', 'setting' => 'app_name'], function ($router) {
                // Login routes
                $router->get('login', [
                    'middleware' => 'guest',
                    'as'         => 'login',
                    'uses'       => 'AuthController@showLogin',
                ]);

                $router->post('login', [
                    'middleware' => ['guest', 'csrf', 'throttling:10,10'],
                    'as'         => 'logout',
                    'uses'       => 'AuthController@postLogin',
                ]);

                // Two factor authorization
                $router->get('2fa', [
                    'as'   => 'two-factor',
                    'uses' => 'AuthController@showTwoFactorAuth',
                ]);

                $router->post('2fa', 'AuthController@postTwoFactor');
            });

            $router->group(['middleware' => 'auth'], function ($router) {
                $router->get('logout', [
                    'as'   => 'logout',
                    'uses' => 'AuthController@logoutAction',
                ]);
            });
        });
    }
}
