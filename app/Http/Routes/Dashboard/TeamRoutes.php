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
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

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
            'middleware' => ['auth'],
            'namespace'  => 'Dashboard',
            'prefix'     => 'dashboard/team',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.team',
                'uses' => 'TeamController@showTeamView',
            ]);

            $router->group(['middleware' => 'admin'], function (Registrar $router) {
                $router->get('create', [
                    'as'   => 'get:dashboard.team.create',
                    'uses' => 'TeamController@showAddTeamMemberView',
                ]);
                $router->post('create', [
                    'as'   => 'post:dashboard.team.create',
                    'uses' => 'TeamController@postAddUser',
                ]);

                $router->get('invite', [
                    'as'   => 'get:dashboard.team.invite',
                    'uses' => 'TeamController@showInviteTeamMemberView',
                ]);
                $router->post('invite', [
                    'as'   => 'post:dashboard.team.invite',
                    'uses' => 'TeamController@postInviteUser',
                ]);

                $router->get('{user}', [
                    'as'   => 'get:dashboard.team.edit',
                    'uses' => 'TeamController@showTeamMemberView',
                ]);
                $router->post('{user}', [
                    'as'   => 'post::dashboard.team.edit',
                    'uses' => 'TeamController@postUpdateUser',
                ]);
                $router->delete('{user}', [
                    'as'   => 'delete:dashboard.team.delete',
                    'uses' => 'TeamController@deleteUser',
                ]);
            });
        });
    }
}
