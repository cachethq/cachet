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
 * This is the dashboard schedule routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ScheduleRoutes
{
    /**
     * Define the dashboard schedule routes.
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
            'as'         => 'dashboard.schedule.',
            'prefix'     => 'dashboard/schedule',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'ScheduleController@showIndex',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'ScheduleController@showAddSchedule',
            ]);
            $router->post('add', 'ScheduleController@addScheduleAction');
            $router->get('{incident}/edit', [
                'as'   => 'edit',
                'uses' => 'ScheduleController@showEditSchedule',
            ]);
            $router->post('{incident}/edit', 'ScheduleController@editScheduleAction');
            $router->delete('{incident}/delete', [
                'as'   => 'delete',
                'uses' => 'ScheduleController@deleteScheduleAction',
            ]);
        });
    }
}
