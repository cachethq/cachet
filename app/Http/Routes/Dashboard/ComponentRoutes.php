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
            'as'         => 'dashboard.components.',
            'prefix'     => 'dashboard/components',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'ComponentController@showComponents',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'ComponentController@showAddComponent',
            ]);
            $router->post('add', 'ComponentController@createComponentAction');
            $router->get('groups', [
                'as'   => 'groups',
                'uses' => 'ComponentController@showComponentGroups',
            ]);
            $router->get('groups/add', [
                'as'   => 'groups.add',
                'uses' => 'ComponentController@showAddComponentGroup',
            ]);
            $router->get('groups/edit/{component_group}', [
                'as'   => 'groups.edit',
                'uses' => 'ComponentController@showEditComponentGroup',
            ]);
            $router->post('groups/edit/{component_group}', 'ComponentController@updateComponentGroupAction');
            $router->delete('groups/{component_group}/delete', 'ComponentController@deleteComponentGroupAction');
            $router->post('groups/add', 'ComponentController@postAddComponentGroup');
            $router->get('{component}/edit', [
                'as'   => 'edit',
                'uses' => 'ComponentController@showEditComponent',
            ]);
            $router->delete('{component}/delete', 'ComponentController@deleteComponentAction');
            $router->post('{component}/edit', 'ComponentController@updateComponentAction');
        });
    }
}
