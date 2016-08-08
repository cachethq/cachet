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
     * Define the api routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['namespace' => 'Api', 'prefix' => 'api/v1', 'middleware' => ['api']], function (Registrar $router) {
            $router->group(['middleware' => ['auth.api']], function (Registrar $router) {
                $router->get('ping', 'GeneralController@ping');
                $router->get('version', 'GeneralController@version');
                $router->get('status', 'GeneralController@status');

                $router->get('components', 'ComponentController@getComponents');
                $router->get('components/groups', 'ComponentGroupController@getGroups');
                $router->get('components/groups/{component_group}', 'ComponentGroupController@getGroup');
                $router->get('components/{component}', 'ComponentController@getComponent');

                $router->get('incidents', 'IncidentController@getIncidents');
                $router->get('incidents/{incident}', 'IncidentController@getIncident');

                $router->get('incidents/{incident}/updates', 'IncidentUpdateController@getIncidentUpdates');
                $router->get('incidents/{incident}/updates/{update}', 'IncidentUpdateController@getIncidentUpdate');

                $router->get('metrics', 'MetricController@getMetrics');
                $router->get('metrics/{metric}', 'MetricController@getMetric');
                $router->get('metrics/{metric}/points', 'MetricController@getMetricPoints');
            });

            $router->group(['middleware' => ['auth.api:true']], function (Registrar $router) {
                $router->get('actions', 'ActionController@getActions');
                $router->get('actions/{timed_action}', 'ActionController@getAction');
                $router->get('actions/{timed_action}/instances', 'ActionController@getActionInstances');
                $router->get('actions/{timed_action}/instances/current', 'ActionController@getCurrentActionInstance');
                $router->get('actions/{timed_action}/instances/next', 'ActionController@getNextActionInstance');
                $router->get('actions/{timed_action}/instances/{timed_action_instance}', 'ActionController@getActionInstance');
                $router->get('subscribers', 'SubscriberController@getSubscribers');

                $router->post('actions', 'ActionController@postActions');
                $router->post('components', 'ComponentController@postComponents');
                $router->post('components/groups', 'ComponentGroupController@postGroups');
                $router->post('incidents', 'IncidentController@postIncidents');
                $router->post('incidents/{incident}/updates', 'IncidentUpdateController@postIncidentUpdate');
                $router->post('metrics', 'MetricController@postMetrics');
                $router->post('metrics/{metric}/points', 'MetricPointController@postMetricPoints');
                $router->post('subscribers', 'SubscriberController@postSubscribers');

                $router->put('actions/{timed_action}', 'ActionController@putAction');
                $router->put('actions/{timed_action}/instances/{timed_action_instance}', 'ActionController@putActionInstance');
                $router->put('components/groups/{component_group}', 'ComponentGroupController@putGroup');
                $router->put('components/{component}', 'ComponentController@putComponent');
                $router->put('incidents/{incident}', 'IncidentController@putIncident');
                $router->put('incidents/{incident}/updates/{update}', 'IncidentUpdateController@putIncidentUpdate');
                $router->put('metrics/{metric}', 'MetricController@putMetric');
                $router->put('metrics/{metric}/points/{metric_point}', 'MetricPointController@putMetricPoint');

                $router->delete('actions/{timed_action}', 'ActionController@deleteAction');
                $router->delete('actions/{timed_action}/instance', 'ActionController@deleteInstance');
                $router->delete('components/groups/{component_group}', 'ComponentGroupController@deleteGroup');
                $router->delete('components/{component}', 'ComponentController@deleteComponent');
                $router->delete('incidents/{incident}', 'IncidentController@deleteIncident');
                $router->delete('incidents/{incident}/updates/{update}', 'IncidentUpdateController@deleteIncidentUpdate');
                $router->delete('metrics/{metric}', 'MetricController@deleteMetric');
                $router->delete('metrics/{metric}/points/{metric_point}', 'MetricPointController@deleteMetricPoint');
                $router->delete('subscribers/{subscriber}', 'SubscriberController@deleteSubscriber');
                $router->delete('subscriptions/{subscription}', 'SubscriberController@deleteSubscription');
            });
        });
    }
}
