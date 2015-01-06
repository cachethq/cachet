<?php

Route::group(['before' => 'auth', 'prefix' => 'dashboard', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    // Dashboard
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@showDashboard',
    ]);

    // Components
    Route::group(['prefix' => 'components'], function() {
        Route::get('/', [
            'as'   => 'dashboard.components',
            'uses' => 'DashComponentController@showComponents',
        ]);
        Route::get('add', [
            'as'   => 'dashboard.components.add',
            'uses' => 'DashComponentController@showAddComponent',
        ]);
        Route::post('add', 'DashComponentController@createComponentAction');
        Route::get('groups', [
            'as'   => 'dashboard.components.groups',
            'uses' => 'DashComponentController@showComponentGroups',
        ]);
        Route::get('groups/add', [
            'as'   => 'dashboard.components.groups.add',
            'uses' => 'DashComponentController@showAddComponentGroup',
        ]);
        Route::post('groups/add', 'DashComponentController@postAddComponentGroup');
        Route::get('{component}/delete', 'DashComponentController@deleteComponentAction');
        Route::get('{component}/edit', 'DashComponentController@showEditComponent');
        Route::post('{component}/edit', 'DashComponentController@updateComponentAction');
    });

    // Incidents
    Route::group(['prefix' => 'incidents'], function() {
        Route::get('/', [
            'as'   => 'dashboard.incidents',
            'uses' => 'DashIncidentController@showIncidents',
        ]);
        Route::get('add', [
            'as'   => 'dashboard.incidents.add',
            'uses' => 'DashIncidentController@showAddIncident',
        ]);
        Route::post('add', 'DashIncidentController@createIncidentAction');
        Route::get('{incident}/delete', 'DashIncidentController@deleteIncidentAction');
        Route::get('{incident}/edit', 'DashIncidentController@showEditIncidentAction');
        Route::post('{incident}/edit', 'DashIncidentController@editIncidentAction');
        Route::get('template', [
            'as'   => 'dashboard.incidents.template',
            'uses' => 'DashIncidentController@showAddIncidentTemplate',
        ]);
        Route::post('template', 'DashIncidentController@createIncidentTemplateAction');
    });

    // Metrics
    Route::group(['prefix' => 'metrics'], function() {
        Route::get('/', [
            'as'   => 'dashboard.metrics',
            'uses' => 'DashboardController@showMetrics',
        ]);
    });

    // Notifications
    Route::group(['prefix' => 'notifications'], function() {
        Route::get('/', [
            'as'   => 'dashboard.notifications',
            'uses' => 'DashboardController@showNotifications',
        ]);
    });

    // Team Members
    Route::group(['prefix' => 'team'], function() {
        Route::get('/', [
            'as'   => 'dashboard.team',
            'uses' => 'DashboardController@showTeamView',
        ]);
        Route::get('add', [
            'as'   => 'dashboard.team.add',
            'uses' => 'DashboardController@showAddTeamMemberView'
        ]);
        Route::get('{user}', 'DashboardController@showTeamMemberView');
        Route::post('add', 'DashboardController@postAddUser');
        Route::post('{user}', 'DashboardController@postUpdateUser');
    });

    // Settings
    Route::group(['prefix' => 'settings'], function() {
        Route::get('setup', [
            'as'   => 'dashboard.settings.setup',
            'uses' => 'DashSettingsController@showSetupView',
        ]);
        Route::get('security', [
            'as'   => 'dashboard.settings.security',
            'uses' => 'DashSettingsController@showSecurityView',
        ]);
        Route::get('theme', [
            'as'   => 'dashboard.settings.theme',
            'uses' => 'DashSettingsController@showThemeView',
        ]);
        Route::get('stylesheet', [
            'as'   => 'dashboard.settings.stylesheet',
            'uses' => 'DashSettingsController@showStylesheetView',
        ]);
        Route::post('/', 'DashSettingsController@postSettings');
    });

    // User Settings
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', [
            'as'   => 'dashboard.user',
            'uses' => 'DashUserController@showUser',
        ]);
        Route::post('/', 'DashUserController@postUser');
        Route::get('{user}/api/regen', 'DashUserController@regenerateApiKey');
    });

    // Internal API.
    // This should only be used for making requests within the dashboard.
    Route::group(['prefix' => 'api'], function () {
        Route::post('components/order', 'DashAPIController@postUpdateComponentOrder');
        Route::post('components/{component}', 'DashAPIController@postUpdateComponent');
    });
});
