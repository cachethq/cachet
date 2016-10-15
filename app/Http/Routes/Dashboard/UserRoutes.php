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
 * This is the dashboard user routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class UserRoutes
{
    /**
     * Define the dashboard user routes.
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
            'prefix'     => 'dashboard/user',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.user',
                'uses' => 'UserController@showUser',
            ]);
            $router->post('/', [
                'as'   => 'post:dashboard.user',
                'uses' => 'UserController@postUser',
            ]);

            $router->get('{user}/api/regen', [
                'as'   => 'get:dashboard.user.api.regen',
                'uses' => 'UserController@regenerateApiKey',
            ]);
        });
    }
}
