<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AdminRoutes
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
        ], function ($router) {
            // Dashboard
            $router->get('/', [
                'as'   => 'dashboard',
                'uses' => 'DashboardController@showDashboard',
            ]);

            // Components
            $router->group(['prefix' => 'components'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.components',
                    'uses' => 'ComponentController@showComponents',
                ]);
                $router->get('add', [
                    'as'   => 'dashboard.components.add',
                    'uses' => 'ComponentController@showAddComponent',
                ]);
                $router->post('add', 'ComponentController@createComponentAction');
                $router->get('groups', [
                    'as'   => 'dashboard.components.groups',
                    'uses' => 'ComponentController@showComponentGroups',
                ]);
                $router->get('groups/add', [
                    'as'   => 'dashboard.components.groups.add',
                    'uses' => 'ComponentController@showAddComponentGroup',
                ]);
                $router->get('groups/edit/{component_group}', [
                    'as'   => 'dashboard.components.groups.edit',
                    'uses' => 'ComponentController@showEditComponentGroup',
                ]);
                $router->post('groups/edit/{component_group}', 'ComponentController@updateComponentGroupAction');

                $router->delete('groups/{component_group}/delete', 'ComponentController@deleteComponentGroupAction');
                $router->post('groups/add', 'ComponentController@postAddComponentGroup');
                $router->delete('{component}/delete', 'ComponentController@deleteComponentAction');
                $router->get('{component}/edit', 'ComponentController@showEditComponent');
                $router->post('{component}/edit', 'ComponentController@updateComponentAction');
            });

            // Incidents
            $router->group(['prefix' => 'incidents'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.incidents',
                    'uses' => 'IncidentController@showIncidents',
                ]);
                $router->get('add', [
                    'as'   => 'dashboard.incidents.add',
                    'uses' => 'IncidentController@showAddIncident',
                ]);
                $router->post('add', 'IncidentController@createIncidentAction');
                $router->delete('{incident}/delete', 'IncidentController@deleteIncidentAction');
                $router->get('{incident}/edit', 'IncidentController@showEditIncidentAction');
                $router->post('{incident}/edit', 'IncidentController@editIncidentAction');
            });

            // Scheduled Maintenance
            $router->group(['prefix' => 'schedule'], function ($router) {
                $router->get('/', ['as' => 'dashboard.schedule', 'uses' => 'ScheduleController@showIndex']);

                $router->get('add', [
                    'as'   => 'dashboard.schedule.add',
                    'uses' => 'ScheduleController@showAddSchedule',
                ]);
                $router->post('add', 'ScheduleController@addScheduleAction');

                $router->get('{incident}/edit', [
                    'as'   => 'dashboard.schedule.edit',
                    'uses' => 'ScheduleController@showEditSchedule',
                ]);
                $router->post('{incident}/edit', 'ScheduleController@editScheduleAction');

                $router->delete('{incident}/delete', [
                    'as'   => 'dashboard.schedule.delete',
                    'uses' => 'ScheduleController@deleteScheduleAction',
                ]);
            });

            // Incident Templates
            $router->group(['prefix' => 'templates'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.templates',
                    'uses' => 'IncidentController@showTemplates',
                ]);

                $router->get('add', [
                    'as'   => 'dashboard.templates.add',
                    'uses' => 'IncidentController@showAddIncidentTemplate',
                ]);
                $router->post('add', 'IncidentController@createIncidentTemplateAction');

                $router->get('{incident_template}/edit', 'IncidentController@showEditTemplateAction');
                $router->post('{incident_template}/edit', 'IncidentController@editTemplateAction');
                $router->delete('{incident_template}/delete', 'IncidentController@deleteTemplateAction');
            });

            // Metrics
            $router->group(['prefix' => 'metrics'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.metrics',
                    'uses' => 'MetricController@showMetrics',
                ]);

                $router->get('add', [
                    'as'   => 'dashboard.metrics.add',
                    'uses' => 'MetricController@showAddMetric',
                ]);
                $router->post('add', 'MetricController@createMetricAction');
                $router->delete('{metric}/delete', 'MetricController@deleteMetricAction');
                $router->get('{metric}/edit', 'MetricController@showEditMetricAction');
                $router->post('{metric}/edit', 'MetricController@editMetricAction');
            });

            // Notifications
            $router->group(['prefix' => 'notifications'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.notifications',
                    'uses' => 'DashboardController@showNotifications',
                ]);
            });

            // Team Members
            $router->group(['prefix' => 'team'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.team',
                    'uses' => 'TeamController@showTeamView',
                ]);

                $router->group(['middleware' => 'admin'], function ($router) {
                    $router->get('add', [
                        'as'   => 'dashboard.team.add',
                        'uses' => 'TeamController@showAddTeamMemberView',
                    ]);
                    $router->get('{user}', 'TeamController@showTeamMemberView');
                    $router->post('add', 'TeamController@postAddUser');
                    $router->post('{user}', 'TeamController@postUpdateUser');
                });
            });

            // Settings
            $router->group(['prefix' => 'settings'], function ($router) {
                $router->get('setup', [
                    'as'   => 'dashboard.settings.setup',
                    'uses' => 'SettingsController@showSetupView',
                ]);
                $router->get('security', [
                    'as'   => 'dashboard.settings.security',
                    'uses' => 'SettingsController@showSecurityView',
                ]);
                $router->get('theme', [
                    'as'   => 'dashboard.settings.theme',
                    'uses' => 'SettingsController@showThemeView',
                ]);
                $router->get('stylesheet', [
                    'as'   => 'dashboard.settings.stylesheet',
                    'uses' => 'SettingsController@showStylesheetView',
                ]);
                $router->post('/', 'SettingsController@postSettings');
            });

            // User Settings
            $router->group(['prefix' => 'user'], function ($router) {
                $router->get('/', [
                    'as'   => 'dashboard.user',
                    'uses' => 'UserController@showUser',
                ]);
                $router->post('/', 'UserController@postUser');
                $router->get('{user}/api/regen', 'UserController@regenerateApiKey');
            });

            // Internal API.
            // This should only be used for making requests within the dashboard.
            $router->group(['prefix' => 'api'], function ($router) {
                $router->get('incidents/templates', 'ApiController@getIncidentTemplate');
                $router->post('components/groups/order', 'ApiController@postUpdateComponentGroupOrder');
                $router->post('components/order', 'ApiController@postUpdateComponentOrder');
                $router->post('components/{component}', 'ApiController@postUpdateComponent');
            });
        });
    }
}
