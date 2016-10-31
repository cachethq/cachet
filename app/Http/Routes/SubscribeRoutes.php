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
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'ready', 'localize', 'subscribers'], 'as' => 'subscribe.'], function (Registrar $router) {
            $router->get('subscribe', [
                'as'   => 'subscribe',
                'uses' => 'SubscribeController@showSubscribe',
            ]);

            $router->post('subscribe', [
                'uses' => 'SubscribeController@postSubscribe',
            ]);

            $router->get('subscribe/manage/{code}', [
                'as'   => 'manage',
                'uses' => 'SubscribeController@showManage',
            ]);

            $router->post('subscribe/manage/{code}', [
                'as'   => 'manage',
                'uses' => 'SubscribeController@postManage',
            ]);

            $router->get('subscribe/verify/{code}', [
                'as'   => 'verify',
                'uses' => 'SubscribeController@getVerify',
            ]);

            $router->get('unsubscribe/{code}/{subscription?}', [
                'as'   => 'unsubscribe',
                'uses' => 'SubscribeController@getUnsubscribe',
            ]);
        });
    }
}
