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
            'prefix'     => 'dashboard/incidents',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.incidents',
                'uses' => 'IncidentController@showIncidents',
            ]);

            $router->get('create', [
                'as'   => 'get:dashboard.incidents.create',
                'uses' => 'IncidentController@showAddIncident',
            ]);
            $router->post('create', [
                'as'   => 'post:dashboard.incidents.create',
                'uses' => 'IncidentController@createIncidentAction',
            ]);

            $router->get('{incident}', [
                'as'   => 'get:dashboard.incidents.edit',
                'uses' => 'IncidentController@showEditIncidentAction',
            ]);
            $router->post('{incident}', [
                'as'   => 'post:dashboard.incidents.edit',
                'uses' => 'IncidentController@editIncidentAction',
            ]);
            $router->delete('{incident}', [
                'as'   => 'delete:dashboard.incidents.delete',
                'uses' => 'IncidentController@deleteIncidentAction',
            ]);

            $router->get('{incident}/updates', [
                'as'   => 'get:dashboard.incidents.updates',
                'uses' => 'IncidentController@showIncidentUpdateAction',
            ]);
            $router->post('{incident}/updates', [
                'as'   => 'post:dashboard.incidents.updates',
                'uses' => 'IncidentController@createIncidentUpdateAction',
            ]);
        });
    }
}
