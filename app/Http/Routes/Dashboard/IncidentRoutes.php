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
 * This is the dashboard incident routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class IncidentRoutes
{
    /**
     * Define the dashboard incident routes.
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
            'as'         => 'dashboard.incidents.',
            'prefix'     => 'dashboard/incidents',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'IncidentController@showIncidents',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'IncidentController@showAddIncident',
            ]);
            $router->post('add', 'IncidentController@createIncidentAction');
            $router->delete('{incident}/delete', [
                'as'   => 'delete',
                'uses' => 'IncidentController@deleteIncidentAction',
            ]);
            $router->get('{incident}/edit', [
                'as'   => 'edit',
                'uses' => 'IncidentController@showEditIncidentAction',
            ]);
            $router->post('{incident}/edit', 'IncidentController@editIncidentAction');
        });
    }
}
