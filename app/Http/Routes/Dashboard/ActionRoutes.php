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
 * This is the dashboard action routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ActionRoutes
{
    /**
     * Define the dashboard action routes.
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
            'as'         => 'dashboard.actions.',
            'prefix'     => 'dashboard/actions',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'ActionController@showActions',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'ActionController@showAddAction',
            ]);
            $router->post('add', 'ActionController@createAction');

            $router->group(['prefix' => 'groups', 'as' => 'groups.'], function (Registrar $router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'ActionController@showActionGroups',
                ]);
                $router->get('add', [
                    'as'   => 'add',
                    'uses' => 'ActionController@showAddActionGroup',
                ]);
                $router->get('{timed_action_group}/edit', [
                    'as'   => 'edit',
                    'uses' => 'ActionController@showEditActionGroup',
                ]);
                $router->post('add', 'ActionController@createActionGroup');
                $router->post('{timed_action_group}/edit', 'ActionController@handleEditActionGroup');
                $router->delete('{timed_action_group}/delete', 'ActionController@deleteGroupAction');
            });

            $router->delete('{timed_action}/delete', 'ActionController@deleteAction');
            $router->get('{timed_action}/edit', [
                'as'   => 'edit',
                'uses' => 'ActionController@showEditAction',
            ]);
            $router->post('{timed_action}/edit', 'ActionController@handleEditAction');
        });
    }
}
