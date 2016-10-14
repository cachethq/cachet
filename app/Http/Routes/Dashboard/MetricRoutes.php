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
            'prefix'     => 'dashboard/metrics',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'get:dashboard.metrics',
                'uses' => 'MetricController@showMetrics',
            ]);

            $router->get('create', [
                'as'   => 'get:dashboard.metrics.create',
                'uses' => 'MetricController@showAddMetric',
            ]);
            $router->post('create', [
                'as'   => 'post:dashboard.metrics.create',
                'uses' => 'MetricController@createMetricAction',
            ]);

            $router->get('{metric}', [
                'as'   => 'get:dashboard.metrics.edit',
                'uses' => 'MetricController@showEditMetricAction',
            ]);
            $router->post('{metric}', [
                'as'   => 'post:dashboard.metrics.edit',
                'uses' => 'MetricController@editMetricAction',
            ]);
            $router->delete('{metric}', [
                'as'   => 'delete:dashboard.metrics.delete',
                'uses' => 'MetricController@deleteMetricAction',
            ]);
        });
    }
}
