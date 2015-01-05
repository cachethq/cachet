<?php

Route::group([
    'before' => 'auth',
    'prefix' => 'dashboard',
    'namespace' => 'CachetHQ\Cachet\Http\Controllers',
    ], function () {
    // Dashboard
    Route::get('/', [
        'as' => 'dashboard',
        'uses' => 'DashboardController@showDashboard',
    ]);

    // Components
    Route::get('components', [
        'as' => 'dashboard.components',
        'uses' => 'DashComponentController@showComponents',
    ]);
    Route::get('components/add', [
        'as' => 'dashboard.components.add',
        'uses' => 'DashComponentController@showAddComponent',
    ]);
    Route::post('components/add', 'DashComponentController@createComponentAction');
    Route::get('components/groups', [
        'as' => 'dashboard.components.groups',
        'uses' => 'DashComponentController@showComponentGroups',
    ]);
    Route::get('components/groups/add', [
        'as' => 'dashboard.components.groups.add',
        'uses' => 'DashComponentController@showAddComponentGroup',
    ]);
    Route::post('components/groups/add', 'DashComponentController@postAddComponentGroup');
    Route::get('components/{component}/delete', 'DashComponentController@deleteComponentAction');
    Route::get('components/{component}/edit', 'DashComponentController@showEditComponent');
    Route::post('components/{component}/edit', 'DashComponentController@updateComponentAction');

    // Incidents
    Route::get('incidents', [
        'as' => 'dashboard.incidents',
        'uses' => 'DashIncidentController@showIncidents',
    ]);
    Route::get('incidents/add', [
        'as' => 'dashboard.incidents.add',
        'uses' => 'DashIncidentController@showAddIncident',
    ]);
    Route::post('incidents/add', 'DashIncidentController@createIncidentAction');
    Route::get('incidents/{incident}/delete', 'DashIncidentController@deleteIncidentAction');
    Route::get('incidents/{incident}/edit', 'DashIncidentController@showEditIncidentAction');
    Route::post('incidents/{incident}/edit', 'DashIncidentController@editIncidentAction');
    Route::get('incidents/template', [
        'as' => 'dashboard.incidents.template',
        'uses' => 'DashIncidentController@showAddIncidentTemplate',
    ]);
    Route::post('incidents/template', 'DashIncidentController@createIncidentTemplateAction');

    // Metrics
    Route::get('metrics', [
        'as' => 'dashboard.metrics',
        'uses' => 'DashboardController@showMetrics',
    ]);

    // Notifications
    Route::get('notifications', [
        'as' => 'dashboard.notifications',
        'uses' => 'DashboardController@showNotifications',
    ]);

    // Team Members
    Route::get('team', [
        'as' => 'dashboard.team',
        'uses' => 'DashboardController@showTeamView',
    ]);
    Route::get('team/add', [
        'as' => 'dashboard.team.add',
        'uses' => 'DashboardController@showAddTeamMemberView'
    ]);
    Route::get('team/{user}', 'DashboardController@showTeamMemberView');
    Route::post('team/add', 'DashboardController@postAddUser');
    Route::post('team/{user}', 'DashboardController@postUpdateUser');

    // Settings
    Route::get('settings/setup', [
        'as' => 'dashboard.settings.setup',
        'uses' => 'DashSettingsController@showSetupView',
    ]);
    Route::get('settings/security', [
        'as' => 'dashboard.settings.security',
        'uses' => 'DashSettingsController@showSecurityView',
    ]);
    Route::get('settings/theme', [
        'as' => 'dashboard.settings.theme',
        'uses' => 'DashSettingsController@showThemeView',
    ]);
    Route::get('settings/stylesheet', [
        'as' => 'dashboard.settings.stylesheet',
        'uses' => 'DashSettingsController@showStylesheetView',
    ]);
    Route::post('settings', 'DashSettingsController@postSettings');

    // User Settings
    Route::get('user', [
        'as' => 'dashboard.user',
        'uses' => 'DashUserController@showUser',
    ]);
    Route::get('user/{user}/api/regen', 'DashUserController@regenerateApiKey');
    Route::post('user', 'DashUserController@postUser');

    // Internal API.
    // This should only be used for making requests within the dashboard.
    Route::group(['prefix' => 'api'], function () {
        Route::post('components/order', 'DashAPIController@postUpdateComponentOrder');
        Route::post('components/{component}', 'DashAPIController@postUpdateComponent');
    });
});
