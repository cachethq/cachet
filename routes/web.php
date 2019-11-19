<?php

use Illuminate\Http\Request;

// Status Page Routes
Route::get('/', [
    'as'   => 'get:status-page',
    'uses' => 'StatusPageController@showIndex',
]);

Route::get('incidents/{incident}', [
    'as'   => 'get:incident',
    'uses' => 'StatusPageController@showIncident',
]);

Route::get('schedules/{schedule}', [
    'as'   => 'get:schedule',
    'uses' => 'StatusPageController@showSchedule',
]);

Route::get('metrics/{metric}', [
    'as'   => 'get:metric',
    'uses' => 'StatusPageController@getMetrics',
]);

Route::get('component/{component}/shield', [
    'as'   => 'get:component_shield',
    'uses' => 'StatusPageController@showComponentBadge',
]);

// Authentication Routes
Route::group([
    'middleware' => ['ready'],
    'prefix'     => 'auth',
], function () {
    Route::get('login', [
        'as'         => 'get:auth.login',
        'middleware' => 'guest',
        'uses'       => 'AuthController@showLogin',
    ]);

    Route::post('login', [
        'as'         => 'post:auth.login',
        'middleware' => ['guest', 'throttle:10,10'],
        'uses'       => 'AuthController@postLogin',
    ]);

    Route::get('2fa', [
        'as'   => 'get:auth.two-factor',
        'uses' => 'AuthController@showTwoFactorAuth',
    ]);

    Route::post('2fa', [
        'as'         => 'post:auth.two-factor',
        'middleware' => ['throttle:10,10'],
        'uses'       => 'AuthController@postTwoFactor',
    ]);

    Route::get('logout', [
        'as'         => 'get:auth.logout',
        'uses'       => 'AuthController@logoutAction',
        'middleware' => 'auth',
    ]);
});

// Signup Routes
Route::group([
    'middleware' => ['ready', 'guest'],
    'prefix'     => 'signup',
], function () {
    Route::get('invite/{code}', [
        'as'   => 'get:signup.invite',
        'uses' => 'SignupController@getSignup',
    ]);

    Route::post('invite/{code}', [
        'as'   => 'post:signup.invite',
        'uses' => 'SignupController@postSignup',
    ]);
});

// Subscribe Routes
Route::group([
    'middleware' => ['ready', 'localize', 'subscribers'],
], function () {
    Route::get('subscribe', [
        'as'   => 'get:subscribe',
        'uses' => 'SubscribeController@showSubscribe',
    ]);
    Route::post('subscribe', [
        'as'   => 'post:subscribe',
        'uses' => 'SubscribeController@postSubscribe',
    ]);

    Route::get('subscribe/manage/{code}', [
        'as'         => 'get:subscribe.manage',
        'middleware' => ['signed'],
        'uses'       => 'SubscribeController@showManage',
    ]);
    Route::post('subscribe/manage/{code}', [
        'as'   => 'post:subscribe.manage',
        'uses' => 'SubscribeController@postManage',
    ]);

    Route::get('subscribe/verify/{code}', [
        'as'         => 'get:subscribe.verify',
        'middleware' => ['signed'],
        'uses'       => 'SubscribeController@getVerify',
    ]);

    Route::get('unsubscribe/{code}/{subscription?}', [
        'as'   => 'get:subscribe.unsubscribe',
        'uses' => 'SubscribeController@getUnsubscribe',
    ]);
});

// Dashboard Routes
Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/api',
], function () {
    Route::get('incidents/templates', 'ApiController@getIncidentTemplate');
    Route::post('components/groups/order', 'ApiController@postUpdateComponentGroupOrder');
    Route::post('components/order', 'ApiController@postUpdateComponentOrder');
    Route::any('components/{component}', 'ApiController@postUpdateComponent');
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
], function () {
    Route::get('admin', 'DashboardController@redirectAdmin');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [
            'as'   => 'get:dashboard',
            'uses' => 'DashboardController@showDashboard',
        ]);
    });
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/components',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.components',
        'uses' => 'ComponentController@showComponents',
    ]);

    Route::get('create', [
        'as'   => 'get:dashboard.components.create',
        'uses' => 'ComponentController@showAddComponent',
    ]);
    Route::post('create', [
        'as'   => 'post:dashboard.components.create',
        'uses' => 'ComponentController@createComponentAction',
    ]);

    Route::get('groups', [
        'as'   => 'get:dashboard.components.groups',
        'uses' => 'ComponentGroupController@showComponentGroups',
    ]);

    Route::get('groups/create', [
        'as'   => 'get:dashboard.components.groups.create',
        'uses' => 'ComponentGroupController@showAddComponentGroup',
    ]);
    Route::post('groups/create', [
        'as'   => 'post:dashboard.components.groups.create',
        'uses' => 'ComponentGroupController@postAddComponentGroup',
    ]);

    Route::get('groups/{component_group}', [
        'as'   => 'get:dashboard.components.groups.edit',
        'uses' => 'ComponentGroupController@showEditComponentGroup',
    ]);
    Route::post('groups/{component_group}', [
        'as'   => 'post:dashboard.components.groups.edit',
        'uses' => 'ComponentGroupController@updateComponentGroupAction',
    ]);
    Route::delete('groups/{component_group}', [
        'as'   => 'delete:dashboard.components.groups.delete',
        'uses' => 'ComponentGroupController@deleteComponentGroupAction',
    ]);

    Route::get('{component}', [
        'as'   => 'get:dashboard.components.edit',
        'uses' => 'ComponentController@showEditComponent',
    ]);
    Route::post('{component}', [
        'as'   => 'post:dashboard.components.edit',
        'uses' => 'ComponentController@updateComponentAction',
    ]);
    Route::delete('{component}', [
        'as'   => 'delete:dashboard.components.delete',
        'uses' => 'ComponentController@deleteComponentAction',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/incidents',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.incidents',
        'uses' => 'IncidentController@showIncidents',
    ]);

    Route::get('create', [
        'as'   => 'get:dashboard.incidents.create',
        'uses' => 'IncidentController@showAddIncident',
    ]);
    Route::post('create', [
        'as'   => 'post:dashboard.incidents.create',
        'uses' => 'IncidentController@createIncidentAction',
    ]);

    Route::get('{incident}', [
        'as'   => 'get:dashboard.incidents.edit',
        'uses' => 'IncidentController@showEditIncidentAction',
    ]);
    Route::post('{incident}', [
        'as'   => 'post:dashboard.incidents.edit',
        'uses' => 'IncidentController@editIncidentAction',
    ]);
    Route::delete('{incident}', [
        'as'   => 'delete:dashboard.incidents.delete',
        'uses' => 'IncidentController@deleteIncidentAction',
    ]);

    Route::get('{incident}/updates', [
        'as'   => 'get:dashboard.incidents.updates',
        'uses' => 'IncidentUpdateController@showIncidentUpdates',
    ]);
    Route::get('{incident}/updates/create', [
        'as'   => 'get:dashboard.incidents.updates.create',
        'uses' => 'IncidentUpdateController@showCreateIncidentUpdateAction',
    ]);
    Route::post('{incident}/updates/create', [
        'as'   => 'post:dashboard.incidents.updates.create',
        'uses' => 'IncidentUpdateController@createIncidentUpdateAction',
    ]);
    Route::get('{incident}/updates/{incident_update}', [
        'as'   => 'get:dashboard.incidents.updates.edit',
        'uses' => 'IncidentUpdateController@showEditIncidentUpdateAction',
    ]);
    Route::post('{incident}/updates/{incident_update}', [
        'as'   => 'post:dashboard.incidents.updates.edit',
        'uses' => 'IncidentUpdateController@editIncidentUpdateAction',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/metrics',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.metrics',
        'uses' => 'MetricController@showMetrics',
    ]);

    Route::get('create', [
        'as'   => 'get:dashboard.metrics.create',
        'uses' => 'MetricController@showAddMetric',
    ]);
    Route::post('create', [
        'as'   => 'post:dashboard.metrics.create',
        'uses' => 'MetricController@createMetricAction',
    ]);

    Route::get('{metric}', [
        'as'   => 'get:dashboard.metrics.edit',
        'uses' => 'MetricController@showEditMetricAction',
    ]);
    Route::post('{metric}', [
        'as'   => 'post:dashboard.metrics.edit',
        'uses' => 'MetricController@editMetricAction',
    ]);
    Route::delete('{metric}', [
        'as'   => 'delete:dashboard.metrics.delete',
        'uses' => 'MetricController@deleteMetricAction',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/schedule',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.schedule',
        'uses' => 'ScheduleController@showIndex',
    ]);

    Route::get('create', [
        'as'   => 'get:dashboard.schedule.create',
        'uses' => 'ScheduleController@showAddSchedule',
    ]);
    Route::post('create', [
        'as'   => 'post:dashboard.schedule.create',
        'uses' => 'ScheduleController@addScheduleAction',
    ]);

    Route::get('{schedule}', [
        'as'   => 'get:dashboard.schedule.edit',
        'uses' => 'ScheduleController@showEditSchedule',
    ]);
    Route::post('{schedule}', [
        'as'   => 'post:dashboard.schedule.edit',
        'uses' => 'ScheduleController@editScheduleAction',
    ]);
    Route::delete('{schedule}', [
        'as'   => 'delete:dashboard.schedule.delete',
        'uses' => 'ScheduleController@deleteScheduleAction',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/settings',
], function () {
    Route::get('setup', [
        'as'   => 'get:dashboard.settings.setup',
        'uses' => 'SettingsController@showSetupView',
    ]);
    Route::get('analytics', [
        'as'   => 'get:dashboard.settings.analytics',
        'uses' => 'SettingsController@showAnalyticsView',
    ]);
    Route::get('localization', [
        'as'   => 'get:dashboard.settings.localization',
        'uses' => 'SettingsController@showLocalizationView',
    ]);
    Route::get('security', [
        'as'   => 'get:dashboard.settings.security',
        'uses' => 'SettingsController@showSecurityView',
    ]);
    Route::get('theme', [
        'as'   => 'get:dashboard.settings.theme',
        'uses' => 'SettingsController@showThemeView',
    ]);
    Route::get('stylesheet', [
        'as'   => 'get:dashboard.settings.stylesheet',
        'uses' => 'SettingsController@showStylesheetView',
    ]);
    Route::get('customization', [
        'as'   => 'get:dashboard.settings.customization',
        'uses' => 'SettingsController@showCustomizationView',
    ]);
    Route::get('credits', [
        'as'   => 'get:dashboard.settings.credits',
        'uses' => 'SettingsController@showCreditsView',
    ]);
    Route::get('log', [
        'as'   => 'get:dashboard.settings.log',
        'uses' => 'SettingsController@showLogView',
    ]);
    Route::get('mail', [
        'as'   => 'get:dashboard.settings.mail',
        'uses' => 'SettingsController@showMailView',
    ]);
    Route::post('mail', [
        'as'   => 'post:dashboard.settings.mail',
        'uses' => 'SettingsController@postMail',
    ]);
    Route::post('mail/test', [
        'as'   => 'post:dashboard.settings.mail.test',
        'uses' => 'SettingsController@testMail',
    ]);

    Route::post('/', [
        'as'   => 'post:dashboard.settings',
        'uses' => 'SettingsController@postSettings',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/subscribers',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.subscribers',
        'uses' => 'SubscriberController@showSubscribers',
    ]);

    Route::get('create', [
        'as'   => 'get:dashboard.subscribers.create',
        'uses' => 'SubscriberController@showAddSubscriber',
    ]);
    Route::post('create', [
        'as'   => 'post:dashboard.subscribers.create',
        'uses' => 'SubscriberController@createSubscriberAction',
    ]);

    Route::delete('{subscriber}/delete', [
        'as'   => 'delete:dashboard.subscribers.delete',
        'uses' => 'SubscriberController@deleteSubscriberAction',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/team',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.team',
        'uses' => 'TeamController@showTeamView',
    ]);

    Route::group(['middleware' => 'admin'], function () {
        Route::get('create', [
            'as'   => 'get:dashboard.team.create',
            'uses' => 'TeamController@showAddTeamMemberView',
        ]);
        Route::post('create', [
            'as'   => 'post:dashboard.team.create',
            'uses' => 'TeamController@postAddUser',
        ]);

        Route::get('invite', [
            'as'   => 'get:dashboard.team.invite',
            'uses' => 'TeamController@showInviteTeamMemberView',
        ]);
        Route::post('invite', [
            'as'   => 'post:dashboard.team.invite',
            'uses' => 'TeamController@postInviteUser',
        ]);

        Route::get('{user}', [
            'as'   => 'get:dashboard.team.edit',
            'uses' => 'TeamController@showTeamMemberView',
        ]);
        Route::post('{user}', [
            'as'   => 'post::dashboard.team.edit',
            'uses' => 'TeamController@postUpdateUser',
        ]);
        Route::delete('{user}', [
            'as'   => 'delete:dashboard.team.delete',
            'uses' => 'TeamController@deleteUser',
        ]);
    });
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/templates',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.templates',
        'uses' => 'IncidentTemplateController@showTemplates',
    ]);

    Route::get('create', [
        'as'   => 'get:dashboard.templates.create',
        'uses' => 'IncidentTemplateController@showAddIncidentTemplate',
    ]);
    Route::post('create', [
        'as'   => 'post:dashboard.templates.create',
        'uses' => 'IncidentTemplateController@createIncidentTemplateAction',
    ]);

    Route::get('{incident_template}', [
        'as'   => 'get:dashboard.templates.edit',
        'uses' => 'IncidentTemplateController@showEditTemplateAction',
    ]);
    Route::post('{incident_template}', [
        'as'   => 'post:dashboard.templates.edit',
        'uses' => 'IncidentTemplateController@editTemplateAction',
    ]);
    Route::delete('{incident_template}', [
        'as'   => 'delete:dashboard.templates.delete',
        'uses' => 'IncidentTemplateController@deleteTemplateAction',
    ]);
});

Route::group([
    'middleware' => ['auth'],
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard/user',
], function () {
    Route::get('/', [
        'as'   => 'get:dashboard.user',
        'uses' => 'UserController@showUser',
    ]);
    Route::post('/', [
        'as'   => 'post:dashboard.user',
        'uses' => 'UserController@postUser',
    ]);

    Route::get('{user}/api/regen', [
        'as'   => 'get:dashboard.user.api.regen',
        'uses' => 'UserController@regenerateApiKey',
    ]);
});

// Setup Routes
Route::group([
    'middleware' => ['setup'],
    'prefix'     => 'setup',
], function () {
    Route::get('/', [
        'as'   => 'get:setup',
        'uses' => 'SetupController@getIndex',
    ]);

    Route::group([
        'middleware' => ['setup'],
        'prefix'     => 'setup',
    ], function () {
        Route::post('step1', [
            'as'   => 'post:setup.step1',
            'uses' => 'SetupController@postStep1',
        ]);

        Route::post('step2', [
            'as'   => 'post:setup.step2',
            'uses' => 'SetupController@postStep2',
        ]);

        Route::post('step3', [
            'as'   => 'post:setup.step3',
            'uses' => 'SetupController@postStep3',
        ]);
    });
});
