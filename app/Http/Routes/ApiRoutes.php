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
            $router->group(['middleware' => ['auth.api', 'cors']], function (Registrar $router) {
                $router->get('components', 'ComponentController@index')->name('get:api.components');
                $router->get('components/groups', 'ComponentGroupController@index')->name('get:api.components.groups');
                $router->get('components/groups/{component_group}', 'ComponentGroupController@show')->name('get:api.components.groups.show');
                $router->get('components/{component}', 'ComponentController@show')->name('get:api.components.show');

                $router->get('incidents', 'IncidentController@index')->name('get:api.incidents');

                $router->get('incidents/templates', 'IncidentTemplateController@index')->name('get:api.incidents.templates');
                $router->get('incidents/templates/{incident_template}', 'IncidentTemplateController@show')->name('get:api.incidents.templates.show');

                $router->get('incidents/{incident}', 'IncidentController@show')->name('get:api.incidents.show');
                $router->get('incidents/{incident}/updates', 'IncidentUpdateController@index')->name('get:api.incidents.updates');
                $router->get('incidents/{incident}/updates/{update}', 'IncidentUpdateController@show')->name('get:api.incidents.updates.show');

                $router->get('metrics', 'MetricController@index')->name('get:api.metrics');
                $router->get('metrics/{metric}', 'MetricController@show')->name('get:api.metrics.show');
                $router->get('metrics/{metric}/points', 'MetricPointController@index')->name('get:api.metrics.show.points');

                $router->get('schedules', 'ScheduleController@index')->name('get:api.schedules');
                $router->get('schedules/{schedule}', 'ScheduleController@show')->name('get:api.schedules.show');
            });

            $router->group(['middleware' => ['auth.api:true']], function (Registrar $router) {
                $router->get('subscribers', 'SubscriberController@index')->name('get:api.subscribers');

                $router->post('components', 'ComponentController@store')->name('post:api.components.store');
                $router->post('components/groups', 'ComponentGroupController@store')->name('post:api.components.groups.store');
                $router->post('incidents', 'IncidentController@store')->name('post:api.incidents');
                $router->post('incidents/{incident}/updates', 'IncidentUpdateController@store')->name('post:api.incidents.updates');
                $router->post('metrics', 'MetricController@store')->name('post:api.metrics');
                $router->post('metrics/{metric}/points', 'MetricPointController@store')->name('post:api.metrics.points');
                $router->post('schedules', 'ScheduleController@store')->name('post:api.schedules');
                $router->post('subscribers', 'SubscriberController@store')->name('post:api.subscribers');

                $router->put('components/groups/{component_group}', 'ComponentGroupController@update')->name('put:api.components.groups');
                $router->put('components/{component}', 'ComponentController@update')->name('put:api.components');
                $router->put('incidents/{incident}', 'IncidentController@update')->name('put:api.incidents');
                $router->put('incidents/{incident}/updates/{update}', 'IncidentUpdateController@update')->name('put:api.incidents.updates');
                $router->put('metrics/{metric}', 'MetricController@update')->name('put:api.metrics');
                $router->put('metrics/{metric}/points/{metric_point}', 'MetricPointController@update')->name('put:api.metrics.points');
                $router->put('schedules/{schedule}', 'ScheduleController@update')->name('put:api.schedules');

                $router->delete('components/groups/{component_group}', 'ComponentGroupController@destroy')->name('delete:api.components.groups');
                $router->delete('components/{component}', 'ComponentController@destroy')->name('delete:api.components');
                $router->delete('incidents/{incident}', 'IncidentController@destroy')->name('delete:api.incidents');
                $router->delete('incidents/{incident}/updates/{update}', 'IncidentUpdateController@destroy')->name('delete:api.incidents.updates');
                $router->delete('metrics/{metric}', 'MetricController@destroy')->name('delete:api.metrics');
                $router->delete('metrics/{metric}/points/{metric_point}', 'MetricPointController@destroy')->name('delete:api.metrics.points');
                $router->delete('schedules/{schedule}', 'ScheduleController@destroy')->name('delete:api.schedules');
                $router->delete('subscribers/{subscriber}', 'SubscriberController@destroy')->name('delete:api.subscribers');
                $router->delete('subscriptions/{subscription}', 'SubscriptionController@destroy')->name('delete:api.subscriptions');
            });
        });
    }
}
