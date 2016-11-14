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
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

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
            'middleware' => ['auth'],
            'namespace'  => 'Dashboard',
            'prefix'     => 'dashboard/templates',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.templates',
                'uses' => 'IncidentController@showTemplates',
            ]);

            $router->get('create', [
                'as'   => 'get:dashboard.templates.create',
                'uses' => 'IncidentController@showAddIncidentTemplate',
            ]);
            $router->post('create', [
                'as'   => 'post:dashboard.templates.create',
                'uses' => 'IncidentController@createIncidentTemplateAction',
            ]);

            $router->get('{incident_template}', [
                'as'   => 'get:dashboard.templates.edit',
                'uses' => 'IncidentController@showEditTemplateAction',
            ]);
            $router->post('{incident_template}', [
                'as'   => 'post:dashboard.templates.edit',
                'uses' => 'IncidentController@editTemplateAction',
            ]);
            $router->delete('{incident_template}', [
                'as'   => 'delete:dashboard.templates.delete',
                'uses' => 'IncidentController@deleteTemplateAction',
            ]);
        });
    }
}
