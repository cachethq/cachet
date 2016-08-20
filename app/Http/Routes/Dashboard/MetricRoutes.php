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
 * This is the dashboard metric routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class MetricRoutes
{
    /**
     * Define the dashboard metric routes.
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
            'as'         => 'dashboard.metrics.',
            'prefix'     => 'dashboard/metrics',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'MetricController@showMetrics',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'MetricController@showAddMetric',
            ]);
            $router->post('add', 'MetricController@createMetricAction');
            $router->delete('{metric}/delete', 'MetricController@deleteMetricAction');
            $router->get('{metric}/edit', [
                'as'   => 'edit',
                'uses' => 'MetricController@showEditMetricAction',
            ]);
            $router->post('{metric}/edit', 'MetricController@editMetricAction');
        });
    }
}
