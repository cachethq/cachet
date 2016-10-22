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
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

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
            'middleware' => ['auth'],
            'namespace'  => 'Dashboard',
            'prefix'     => 'dashboard/schedule',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.schedule',
                'uses' => 'ScheduleController@showIndex',
            ]);

            $router->get('create', [
                'as'   => 'get:dashboard.schedule.create',
                'uses' => 'ScheduleController@showAddSchedule',
            ]);
            $router->post('create', [
                'as'   => 'post:dashboard.schedule.create',
                'uses' => 'ScheduleController@addScheduleAction',
            ]);

            $router->get('{incident}', [
                'as'   => 'get:dashboard.schedule.edit',
                'uses' => 'ScheduleController@showEditSchedule',
            ]);
            $router->post('{incident}', [
                'as'   => 'post:dashboard.schedule.edit',
                'uses' => 'ScheduleController@editScheduleAction',
            ]);
            $router->delete('{incident}', [
                'as'   => 'delete:dashboard.schedule.delete',
                'uses' => 'ScheduleController@deleteScheduleAction',
            ]);
        });
    }
}
