<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ApiRoutes
{
    /**
     * Define the api routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group([
            'namespace'  => 'Api',
            'prefix'     => 'api/v1',
        ], function ($router) {
            // Components
            $router->get('components', 'ComponentController@getComponents');
            $router->get('components/{id}', 'ComponentController@getComponent');

            // Incidents
            $router->get('incidents', 'IncidentController@getIncidents');
            $router->get('incidents/{id}', 'IncidentController@getIncident');

            // Metrics
            $router->get('metrics', 'MetricController@getMetrics');
            $router->get('metrics/{id}', 'MetricController@getMetric');
            $router->get('metrics/{id}/points', 'MetricController@getMetricPoints');

            // Api protected
            $router->group(['middleware' => 'auth.api'], function ($router) {
                $router->post('components', 'ComponentController@postComponents');
                $router->post('incidents', 'IncidentController@postIncidents');
                $router->post('metrics', 'MetricController@postMetrics');
                $router->post('metrics/{id}/points', 'MetricPointController@postMetricPoints');

                $router->put('components/{id}', 'ComponentController@putComponent');
                $router->put('incidents/{id}', 'IncidentController@putIncident');
                $router->put('metrics/{id}', 'MetricController@putMetric');
                $router->put('metrics/{id}/points/{metric_id}', 'MetricPointController@putMetricPoint');

                $router->delete('components/{id}', 'ComponentController@deleteComponent');
                $router->delete('incidents/{id}', 'IncidentController@deleteIncident');
                $router->delete('metrics/{id}', 'MetricController@deleteMetric');
                $router->delete('metrics/{id}/points/{metric_id}', 'MetricPointController@deleteMetricPoint');
            });
        });
    }
}
