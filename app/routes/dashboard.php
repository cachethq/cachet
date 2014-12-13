<?php

Route::group(['before' => 'auth', 'prefix' => 'dashboard'], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@showDashboard']);
    Route::get('components', ['as' => 'dashboard.components', 'uses' => 'DashboardController@showComponents']);
    Route::get('incidents', ['as' => 'dashboard.incidents', 'uses' => 'DashboardController@showIncidents']);
    Route::get('metrics', ['as' => 'dashboard.metrics', 'uses' => 'DashboardController@showMetrics']);
    Route::get('notifications', ['as' => 'dashboard.notifications', 'uses' => 'DashboardController@showNotifications']);
    Route::get('status-page', ['as' => 'dashboard.status-page', 'uses' => 'DashboardController@showStatusPage']);
    Route::get('settings', ['as' => 'dashboard.settings', 'uses' => 'DashboardController@showSettings']);
});
