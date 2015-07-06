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

class StatusPageRoutes
{
    /**
     * Define the status page routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        // Prevent access until the app is setup.
        $router->group(['middleware' => 'app.hasSetting', 'setting' => 'app_name'], function ($router) {
            $router->get('/', [
                'as'   => 'status-page',
                'uses' => 'HomeController@showIndex',
            ]);

            $router->get('/atom/{component_group?}', 'AtomController@feedAction');
            $router->get('/rss/{component_group?}', 'RssController@feedAction');

            $router->group(['middleware' => 'app.subscribers'], function ($router) {
                $router->get('subscribe', [
                    'as'   => 'subscribe-page',
                    'uses' => 'SubscribeController@showSubscribe',
                ]);
                $router->post('subscribe', [
                    'as'   => 'subscribe',
                    'uses' => 'SubscribeController@postSubscribe',
                ]);
                $router->get('subscribe/verify/{code}', [
                    'as'   => 'subscribe-verify',
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
