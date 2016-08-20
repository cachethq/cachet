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
 * This is the dashboard subscriber routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class SubscriberRoutes
{
    /**
     * Define the dashboard subscriber routes.
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
            'as'         => 'dashboard.subscribers.',
            'prefix'     => 'dashboard/subscribers',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'SubscriberController@showSubscribers',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'SubscriberController@showAddSubscriber',
            ]);
            $router->post('add', 'SubscriberController@createSubscriberAction');
            $router->delete('{subscriber}/delete', 'SubscriberController@deleteSubscriberAction');
        });
    }
}
