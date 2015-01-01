<?php

// Prevent access until the app is setup.
Route::group(['before' => 'has_setting:app_name', 'namespace' => 'CachetHQ\Cachet\Controllers'], function () {
    Route::get('/', ['as' => 'status-page', 'uses' => 'HomeController@showIndex']);
    Route::get('/incident/{incident}', 'HomeController@showIncident');
});

// Setup route.
Route::group(['before' => 'is_setup'], function () {
    Route::controller('/setup', 'SetupController');
});

Route::get('/rss', 'RssController@feedAction');
