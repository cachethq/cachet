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
 * This is the dashboard api routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ApiRoutes
{
    /**
     * Define the dashboard api routes.
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
            'prefix'     => 'dashboard/api',
        ], function (Registrar $router) {
            $router->get('incidents/templates', 'ApiController@getIncidentTemplate');
            $router->post('components/groups/order', 'ApiController@postUpdateComponentGroupOrder');
            $router->post('components/order', 'ApiController@postUpdateComponentOrder');
            $router->post('components/{component}', 'ApiController@postUpdateComponent');
        });
    }
}
