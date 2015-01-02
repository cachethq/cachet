<?php

// Prevent access until the app is setup.
Route::group(['before' => 'has_setting:app_name', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::get('/', ['as' => 'status-page', 'uses' => 'HomeController@showIndex']);
    Route::get('/incident/{incident}', 'HomeController@showIncident');
});

// Setup route.
Route::group(['before' => 'is_setup', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::controller('/setup', 'SetupController');
});

Route::group(['namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::get('/atom', 'AtomController@feedAction');
    Route::get('/rss', 'RssController@feedAction');
});
