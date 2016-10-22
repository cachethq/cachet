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
 * This is the auth routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class AuthRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Define the auth routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['ready'],
            'prefix'     => 'auth',
        ], function (Registrar $router) {
            $router->get('login', [
                'as'         => 'get:auth.login',
                'middleware' => 'guest',
                'uses'       => 'AuthController@showLogin',
            ]);

            $router->post('login', [
                'as'         => 'post:auth.login',
                'middleware' => ['guest', 'throttle:10,10'],
                'uses'       => 'AuthController@postLogin',
            ]);

            $router->get('2fa', [
                'as'   => 'get:auth.two-factor',
                'uses' => 'AuthController@showTwoFactorAuth',
            ]);

            $router->post('2fa', [
                'as'         => 'post:auth.two-factor',
                'middleware' => ['throttle:10,10'],
                'uses'       => 'AuthController@postTwoFactor',
            ]);

            $router->get('logout', [
                'as'         => 'get:auth.logout',
                'uses'       => 'AuthController@logoutAction',
                'middleware' => 'auth',
            ]);
        });
    }
}
