<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the api routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ApiRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = false;

    /**
     * Define the api routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'namespace'  => 'Api',
            'prefix'     => 'api/v1',
        ], function (Registrar $router) {
            $router->group(['middleware' => ['auth.api']], function (Registrar $router) {
                $router->get('ping', 'GeneralController@ping');
                $router->get('version', 'GeneralController@version');
                $router->get('status', 'GeneralController@status');

                $router->get('components', 'ComponentController@index');
                $router->get('components/groups', 'ComponentGroupController@index');
                $router->get('components/groups/{component_group}', 'ComponentGroupController@show');
                $router->get('components/{component}', 'ComponentController@show');

                $router->get('incidents', 'IncidentController@index');
                $router->get('incidents/{incident}', 'IncidentController@show');

                $router->get('incidents/{incident}/updates', 'IncidentUpdateController@index');
                $router->get('incidents/{incident}/updates/{update}', 'IncidentUpdateController@show');

                $router->get('metrics', 'MetricController@index');
                $router->get('metrics/{metric}', 'MetricController@show');
                $router->get('metrics/{metric}/points', 'MetricPointController@index');

                $router->get('schedules', 'ScheduleController@index');
                $router->get('schedules/{schedule}', 'ScheduleController@show');
            });

            $router->group(['middleware' => ['auth.api:true']], function (Registrar $router) {
                $router->get('subscribers', 'SubscriberController@index');

                $router->post('components', 'ComponentController@store');
                $router->post('components/groups', 'ComponentGroupController@store');
                $router->post('incidents', 'IncidentController@store');
                $router->post('incidents/{incident}/updates', 'IncidentUpdateController@store');
                $router->post('metrics', 'MetricController@store');
                $router->post('metrics/{metric}/points', 'MetricPointController@store');
                $router->post('schedules', 'ScheduleController@store');
                $router->post('subscribers', 'SubscriberController@store');

                $router->put('components/groups/{component_group}', 'ComponentGroupController@update');
                $router->put('components/{component}', 'ComponentController@update');
                $router->put('incidents/{incident}', 'IncidentController@update');
                $router->put('incidents/{incident}/updates/{update}', 'IncidentUpdateController@update');
                $router->put('metrics/{metric}', 'MetricController@update');
                $router->put('metrics/{metric}/points/{metric_point}', 'MetricPointController@update');
                $router->put('schedules/{schedule}', 'ScheduleController@update');

                $router->delete('components/groups/{component_group}', 'ComponentGroupController@destroy');
                $router->delete('components/{component}', 'ComponentController@destroy');
                $router->delete('incidents/{incident}', 'IncidentController@destroy');
                $router->delete('incidents/{incident}/updates/{update}', 'IncidentUpdateController@destroy');
                $router->delete('metrics/{metric}', 'MetricController@destroy');
                $router->delete('metrics/{metric}/points/{metric_point}', 'MetricPointController@destroy');
                $router->delete('schedules/{schedule}', 'ScheduleController@destroy');
                $router->delete('subscribers/{subscriber}', 'SubscriberController@destroy');
                $router->delete('subscriptions/{subscription}', 'SubscriptionController@destroy');
            });
        });
    }
}
