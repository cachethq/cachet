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
 * This is the signup routes class.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
class SignupRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Define the signup routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['ready', 'guest'],
            'prefix'     => 'signup',
        ], function (Registrar $router) {
            $router->get('invite/{code}', [
                'as'   => 'get:signup.invite',
                'uses' => 'SignupController@getSignup',
            ]);

            $router->post('invite/{code}', [
                'as'   => 'post:signup.invite',
                'uses' => 'SignupController@postSignup',
            ]);
        });
    }
}
