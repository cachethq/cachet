<?php

Route::group(['before' => 'auth', 'prefix' => 'dashboard'], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@showDashboard']);

    // TODO: Switch for Route::controller?
    Route::get('components', ['as' => 'dashboard.components', 'uses' => 'DashComponentController@showComponents']);
    Route::get('components/add', ['as' => 'dashboard.components.add', 'uses' => 'DashComponentController@showAddComponent']);
    Route::post('components/add', 'DashComponentController@createComponentAction');
    Route::get('components/{component}/delete', 'DashComponentController@deleteComponentAction');

    Route::get('incidents', ['as' => 'dashboard.incidents', 'uses' => 'DashIncidentController@showIncidents']);
    Route::get('incidents/add', ['as' => 'dashboard.incidents.add', 'uses' => 'DashIncidentController@showAddIncident']);
    Route::post('incidents/add', 'DashIncidentController@createIncidentAction');

    Route::get('metrics', ['as' => 'dashboard.metrics', 'uses' => 'DashboardController@showMetrics']);
    Route::get('notifications', ['as' => 'dashboard.notifications', 'uses' => 'DashboardController@showNotifications']);
    Route::get('status-page', ['as' => 'dashboard.status-page', 'uses' => 'DashboardController@showStatusPage']);
    Route::get('settings', ['as' => 'dashboard.settings', 'uses' => 'DashSettingsController@showSettings']);
    Route::post('settings', 'DashSettingsController@postSettings');
});
