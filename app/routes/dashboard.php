<?php

Route::group(['before' => 'auth', 'prefix' => 'dashboard'], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@showDashboard']);
    Route::get('components', ['as' => 'dashboard.components', 'uses' => 'DashboardController@showDashboard']);
    Route::get('incidents', ['as' => 'dashboard.incidents', 'uses' => 'DashboardController@showDashboard']);
    Route::get('metrics', ['as' => 'dashboard.metrics', 'uses' => 'DashboardController@showDashboard']);
    Route::get('status-page', ['as' => 'dashboard.status-page', 'uses' => 'DashboardController@showDashboard']);
    Route::get('settings', ['as' => 'dashboard.settings', 'uses' => 'DashboardController@showDashboard']);
});