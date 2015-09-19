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
     * Define the auth routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group([
            'as'         => 'auth.',
            'middleware' => 'app.isSetup',
            'prefix'     => 'auth',
        ], function ($router) {
            $router->get('login', [
                'middleware' => 'guest',
                'as'         => 'login',
                'uses'       => 'AuthController@showLogin',
            ]);

            $router->post('login', [
                'middleware' => ['guest', 'csrf', 'throttling:10,10'],
                'uses'       => 'AuthController@postLogin',
            ]);

            // Two factor authorization
            $router->get('2fa', [
                'as'   => 'two-factor',
                'uses' => 'AuthController@showTwoFactorAuth',
            ]);

            $router->post('2fa', [
                'middleware' => ['csrf', 'throttling:10,10'],
                'uses'       => 'AuthController@postTwoFactor',
            ]);

            $router->get('logout', [
                'as'         => 'logout',
                'uses'       => 'AuthController@logoutAction',
                'middleware' => 'auth',
            ]);
        });
    }
}
