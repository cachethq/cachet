<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
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
            'middleware' => 'accept:application/json',
        ], function ($router) {
            // General
            $router->get('ping', 'GeneralController@ping');

            // Components
            $router->get('components', 'ComponentController@getComponents');
            $router->get('components/{component}', 'ComponentController@getComponent');

            // Incidents
            $router->get('incidents', 'IncidentController@getIncidents');
            $router->get('incidents/{incident}', 'IncidentController@getIncident');

            // Metrics
            $router->get('metrics', 'MetricController@getMetrics');
            $router->get('metrics/{metric}', 'MetricController@getMetric');
            $router->get('metrics/{metric}/points', 'MetricController@getMetricPoints');

            // Api protected
            $router->group(['middleware' => 'auth.api'], function ($router) {
                $router->post('components', 'ComponentController@postComponents');
                $router->post('incidents', 'IncidentController@postIncidents');
                $router->post('metrics', 'MetricController@postMetrics');
                $router->post('metrics/{metric}/points', 'MetricPointController@postMetricPoints');

                $router->put('components/{component}', 'ComponentController@putComponent');
                $router->put('incidents/{incident}', 'IncidentController@putIncident');
                $router->put('metrics/{metric}', 'MetricController@putMetric');
                $router->put('metrics/{metric}/points/{metric_point}', 'MetricPointController@putMetricPoint');

                $router->delete('components/{component}', 'ComponentController@deleteComponent');
                $router->delete('incidents/{incident}', 'IncidentController@deleteIncident');
                $router->delete('metrics/{metric}', 'MetricController@deleteMetric');
                $router->delete('metrics/{metric}/points/{metric_point}', 'MetricPointController@deleteMetricPoint');
            });
        });
    }
}
