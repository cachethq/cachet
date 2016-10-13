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
 * This is the setup routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class SetupRoutes
{
    /**
     * Define the setup routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['web', 'setup'],
            'prefix'     => 'setup',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:setup',
                'uses' => 'SetupController@getIndex',
            ]);

            $router->post('step1', [
                'as'   => 'post:setup.step1',
                'uses' => 'SetupController@postStep1',
            ]);

            $router->post('step2', [
                'as'   => 'post:setup.step2',
                'uses' => 'SetupController@postStep2',
            ]);

            $router->post('step3', [
                'as'   => 'post:setup.step3',
                'uses' => 'SetupController@postStep3',
            ]);
        });
    }
}
