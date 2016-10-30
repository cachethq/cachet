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
 * This is the dashboard team routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class TeamRoutes
{
    /**
     * Define the dashboard team routes.
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
            'as'         => 'dashboard.team.',
            'prefix'     => 'dashboard/team',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'TeamController@showTeamView',
            ]);

            $router->group(['middleware' => 'admin'], function (Registrar $router) {
                $router->get('add', [
                    'as'   => 'add',
                    'uses' => 'TeamController@showAddTeamMemberView',
                ]);
                $router->get('invite', [
                    'as'   => 'invite',
                    'uses' => 'TeamController@showInviteTeamMemberView',
                ]);
                $router->get('{user}', ['as' => 'edit', 'uses' => 'TeamController@showTeamMemberView']);
                $router->post('add', 'TeamController@postAddUser');
                $router->post('invite', 'TeamController@postInviteUser');
                $router->post('{user}', 'TeamController@postUpdateUser');
                $router->delete('{user}/delete', 'TeamController@deleteUser');
            });
        });
    }
}
