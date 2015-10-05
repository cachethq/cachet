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
 * This is the subscriber routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SubscribeRoutes
{
    /**
     * Define the subscribe routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['app.hasSetting', 'localize'],
            'setting'    => 'app_name',
            'as'         => 'subscribe.',
        ], function ($router) {
            $router->group(['middleware' => 'app.subscribers'], function ($router) {
                $router->get('subscribe', [
                    'as'   => 'subscribe',
                    'uses' => 'SubscribeController@showSubscribe',
                ]);

                $router->post('subscribe', [
                    'uses' => 'SubscribeController@postSubscribe',
                ]);

                $router->get('subscribe/verify/{code}', [
                    'as'   => 'verify',
                    'uses' => 'SubscribeController@getVerify',
                ]);

                $router->get('unsubscribe/{code}', [
                    'as'   => 'unsubscribe',
                    'uses' => 'SubscribeController@getUnsubscribe',
                ]);
            });
        });
    }
}
