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
 * This is the dashboard component routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ComponentRoutes
{
    /**
     * Define the dashboard component routes.
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
            'prefix'     => 'dashboard/components',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.components',
                'uses' => 'ComponentController@showComponents',
            ]);

            $router->get('create', [
                'as'   => 'get:dashboard.components.create',
                'uses' => 'ComponentController@showAddComponent',
            ]);
            $router->post('create', [
                'as'   => 'post:dashboard.components.create',
                'uses' => 'ComponentController@createComponentAction',
            ]);

            $router->get('groups', [
                'as'   => 'get:dashboard.components.groups',
                'uses' => 'ComponentController@showComponentGroups',
            ]);

            $router->get('groups/create', [
                'as'   => 'get:dashboard.components.groups.create',
                'uses' => 'ComponentController@showAddComponentGroup',
            ]);
            $router->post('groups/create', [
                'as'   => 'post:dashboard.components.groups.create',
                'uses' => 'ComponentController@postAddComponentGroup',
            ]);

            $router->get('groups/{component_group}', [
                'as'   => 'get:dashboard.components.groups.edit',
                'uses' => 'ComponentController@showEditComponentGroup',
            ]);
            $router->post('groups/{component_group}', [
                'as'   => 'post:dashboard.components.groups.edit',
                'uses' => 'ComponentController@updateComponentGroupAction',
            ]);
            $router->delete('groups/{component_group}', [
                'as'   => 'delete:dashboard.components.groups.delete',
                'uses' => 'ComponentController@deleteComponentGroupAction',
            ]);

            $router->get('{component}', [
                'as'   => 'get:dashboard.components.edit',
                'uses' => 'ComponentController@showEditComponent',
            ]);
            $router->post('{component}', [
                'as'   => 'post:dashboard.components.edit',
                'uses' => 'ComponentController@updateComponentAction',
            ]);
            $router->delete('{component}', [
                'as'   => 'delete:dashboard.components.delete',
                'uses' => 'ComponentController@deleteComponentAction',
            ]);
        });
    }
}
