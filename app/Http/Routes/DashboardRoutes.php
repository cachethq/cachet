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
 * This is the dashboard routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DashboardRoutes
{
    /**
     * Define the dashboard routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => 'auth',
            'prefix'     => 'dashboard',
            'namespace'  => 'Admin',
            'as'         => 'dashboard.',
        ], function ($router) {
            // Dashboard
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'DashboardController@showDashboard',
            ]);

            // Components
            $router->group([
                'as'     => 'components.',
                'prefix' => 'components',
            ], function ($router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'ComponentController@showComponents',
                ]);
                $router->get('add', [
                    'as'   => 'add',
                    'uses' => 'ComponentController@showAddComponent',
                ]);
                $router->post('add', 'ComponentController@createComponentAction');
                $router->get('groups', [
                    'as'   => 'groups',
                    'uses' => 'ComponentController@showComponentGroups',
                ]);
                $router->get('groups/add', [
                    'as'   => 'groups.add',
                    'uses' => 'ComponentController@showAddComponentGroup',
                ]);
                $router->get('groups/edit/{component_group}', [
                    'as'   => 'groups.edit',
                    'uses' => 'ComponentController@showEditComponentGroup',
                ]);
                $router->post('groups/edit/{component_group}', 'ComponentController@updateComponentGroupAction');
                $router->delete('groups/{component_group}/delete', 'ComponentController@deleteComponentGroupAction');
                $router->post('groups/add', 'ComponentController@postAddComponentGroup');
                $router->get('{component}/edit', [
                    'as'   => 'edit',
                    'uses' => 'ComponentController@showEditComponent',
                ]);
                $router->delete('{component}/delete', 'ComponentController@deleteComponentAction');
                $router->post('{component}/edit', 'ComponentController@updateComponentAction');
            });

            // Incidents
            $router->group([
                'as'     => 'incidents.',
                'prefix' => 'incidents',
            ], function ($router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'IncidentController@showIncidents',
                ]);
                $router->get('add', [
                    'as'   => 'add',
                    'uses' => 'IncidentController@showAddIncident',
                ]);
                $router->post('add', 'IncidentController@createIncidentAction');
                $router->delete('{incident}/delete', [
                    'as'   => 'delete',
                    'uses' => 'IncidentController@deleteIncidentAction',
                ]);
                $router->get('{incident}/edit', [
                    'as'   => 'edit',
                    'uses' => 'IncidentController@showEditIncidentAction',
                ]);
                $router->post('{incident}/edit', 'IncidentController@editIncidentAction');
            });

            // Scheduled Maintenance
            $router->group([
                'as'     => 'schedule.',
                'prefix' => 'schedule',
            ], function ($router) {
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

            // Incident Templates
            $router->group([
                'as'     => 'templates.',
                'prefix' => 'templates',
            ], function ($router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'IncidentController@showTemplates',
                ]);
                $router->get('add', [
                    'as'   => 'add',
                    'uses' => 'IncidentController@showAddIncidentTemplate',
                ]);
                $router->post('add', 'IncidentController@createIncidentTemplateAction');
                $router->get('{incident_template}/edit', [
                    'as'   => 'edit',
                    'uses' => 'IncidentController@showEditTemplateAction',
                ]);
                $router->post('{incident_template}/edit', 'IncidentController@editTemplateAction');
                $router->delete('{incident_template}/delete', 'IncidentController@deleteTemplateAction');
            });

            // Subscribers
            $router->group([
                'as'     => 'subscribers.',
                'prefix' => 'subscribers',
            ], function ($router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'SubscriberController@showSubscribers',
                ]);
                $router->get('add', [
                    'as'   => 'add',
                    'uses' => 'SubscriberController@showAddSubscriber',
                ]);
                $router->post('add', 'SubscriberController@createSubscriberAction');
                $router->delete('{subscriber}/delete', 'SubscriberController@deleteSubscriberAction');
            });

            // Metrics
            $router->group([
                'as'     => 'metrics.',
                'prefix' => 'metrics',
            ], function ($router) {
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

            // Team Members
            $router->group([
                'as'     => 'team.',
                'prefix' => 'team',
            ], function ($router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'TeamController@showTeamView',
                ]);

                $router->group(['middleware' => 'admin'], function ($router) {
                    $router->get('add', [
                        'as'   => 'add',
                        'uses' => 'TeamController@showAddTeamMemberView',
                    ]);
                    $router->get('{user}', 'TeamController@showTeamMemberView');
                    $router->post('add', 'TeamController@postAddUser');
                    $router->post('{user}', 'TeamController@postUpdateUser');
                    $router->delete('{user}/delete', 'TeamController@deleteUser');
                });
            });

            // Settings
            $router->group([
                'as'     => 'settings.',
                'prefix' => 'settings',
            ], function ($router) {
                $router->get('setup', [
                    'as'   => 'setup',
                    'uses' => 'SettingsController@showSetupView',
                ]);
                $router->get('security', [
                    'as'   => 'security',
                    'uses' => 'SettingsController@showSecurityView',
                ]);
                $router->get('theme', [
                    'as'   => 'theme',
                    'uses' => 'SettingsController@showThemeView',
                ]);
                $router->get('stylesheet', [
                    'as'   => 'stylesheet',
                    'uses' => 'SettingsController@showStylesheetView',
                ]);
                $router->post('/', 'SettingsController@postSettings');
            });

            // User Settings
            $router->group(['prefix' => 'user'], function ($router) {
                $router->get('/', [
                    'as'   => 'user',
                    'uses' => 'UserController@showUser',
                ]);
                $router->post('/', 'UserController@postUser');
                $router->get('{user}/api/regen', 'UserController@regenerateApiKey');
            });

            /*
             * Internal API.
             * This should only be used for making requests within the dashboard.
             */
            $router->group(['prefix' => 'api'], function ($router) {
                $router->get('incidents/templates', 'ApiController@getIncidentTemplate');
                $router->post('components/groups/order', 'ApiController@postUpdateComponentGroupOrder');
                $router->post('components/order', 'ApiController@postUpdateComponentOrder');
                $router->post('components/{component}', 'ApiController@postUpdateComponent');
            });
        });
    }
}
