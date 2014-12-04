<?php

// Prevent access until the app is setup.
Route::group(['before' => 'has_setting:app_name'], function() {
    Route::get('/', ['as' => 'status-page', 'uses' => 'HomeController@showIndex']);
    Route::get('/incident/{incident}', 'HomeController@showIncident');
});

Route::group(['before' => 'no_setup:app_name'], function() {
    Route::controller('/setup', 'SetupController');
});

Route::get('/rss', 'RSSController@feedAction');
