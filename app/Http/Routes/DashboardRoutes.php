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
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'auth'], 'namespace' => 'Dashboard'], function (Registrar $router) {
            $router->get('admin', 'DashboardController@redirectAdmin');

            $router->group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function (Registrar $router) {
                $router->get('/', [
                    'as'   => 'index',
                    'uses' => 'DashboardController@showDashboard',
                ]);

                $router->group(['as' => 'components.', 'prefix' => 'components'], function (Registrar $router) {
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

                $router->group(['as' => 'incidents.', 'prefix' => 'incidents'], function (Registrar $router) {
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

                $router->group(['as' => 'schedule.', 'prefix' => 'schedule'], function (Registrar $router) {
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

                $router->group(['as' => 'templates.', 'prefix' => 'templates'], function (Registrar $router) {
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

                $router->group(['as' => 'subscribers.', 'prefix' => 'subscribers'], function (Registrar $router) {
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

                $router->group(['as' => 'metrics.', 'prefix' => 'metrics'], function (Registrar $router) {
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

                $router->group(['as' => 'team.', 'prefix' => 'team'], function (Registrar $router) {
                    $router->get('/', [
                        'as'   => 'index',
                        'uses' => 'TeamController@showTeamView',
                    ]);

                    $router->group(['middleware' => 'admin'], function (Registrar $router) {
                        $router->get('add', [
                            'as'   => 'add',
                            'uses' => 'TeamController@showAddTeamMemberView',
                        ]);
                        $router->get('invite', [
                            'as'   => 'invite',
                            'uses' => 'TeamController@showInviteTeamMemberView',
                        ]);
                        $router->get('{user}', ['as' => 'edit', 'uses' => 'TeamController@showTeamMemberView']);
                        $router->post('add', 'TeamController@postAddUser');
                        $router->post('invite', 'TeamController@postInviteUser');
                        $router->post('{user}', 'TeamController@postUpdateUser');
                        $router->delete('{user}/delete', 'TeamController@deleteUser');
                    });
                });

                $router->group(['as' => 'settings.', 'prefix' => 'settings'], function (Registrar $router) {
                    $router->get('setup', [
                        'as'   => 'setup',
                        'uses' => 'SettingsController@showSetupView',
                    ]);
                    $router->get('analytics', [
                        'as'   => 'analytics',
                        'uses' => 'SettingsController@showAnalyticsView',
                    ]);
                    $router->get('localization', [
                        'as'   => 'localization',
                        'uses' => 'SettingsController@showLocalizationView',
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
                    $router->get('customization', [
                        'as'   => 'customization',
                        'uses' => 'SettingsController@showCustomizationView',
                    ]);
                    $router->get('credits', [
                        'as'   => 'credits',
                        'uses' => 'SettingsController@showCreditsView',
                    ]);
                    $router->post('/', 'SettingsController@postSettings');
                });

                $router->group(['prefix' => 'user'], function (Registrar $router) {
                    $router->get('/', [
                        'as'   => 'user',
                        'uses' => 'UserController@showUser',
                    ]);
                    $router->post('/', 'UserController@postUser');
                    $router->get('{user}/api/regen', 'UserController@regenerateApiKey');
                });

                $router->group(['prefix' => 'api'], function (Registrar $router) {
                    $router->get('incidents/templates', 'ApiController@getIncidentTemplate');
                    $router->post('components/groups/order', 'ApiController@postUpdateComponentGroupOrder');
                    $router->post('components/order', 'ApiController@postUpdateComponentOrder');
                    $router->post('components/{component}', 'ApiController@postUpdateComponent');
                });
            });
        });
    }
}
