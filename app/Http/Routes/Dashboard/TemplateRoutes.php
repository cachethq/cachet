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
 * This is the dashboard template routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class TemplateRoutes
{
    /**
     * Define the dashboard template routes.
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
            'as'         => 'dashboard.templates.',
            'prefix'     => 'dashboard/templates',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'IncidentController@showTemplates',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'IncidentController@showAddIncidentTemplate',
            ]);
            $router->post('add', 'IncidentController@createIncidentTemplateAction');
            $router->get('{incident_template}/edit', [
                'as'   => 'edit',
                'uses' => 'IncidentController@showEditTemplateAction',
            ]);
            $router->post('{incident_template}/edit', 'IncidentController@editTemplateAction');
            $router->delete('{incident_template}/delete', 'IncidentController@deleteTemplateAction');
        });
    }
}
