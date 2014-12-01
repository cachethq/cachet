<?php

// Prevent access until the app is setup.
Route::group(['before' => 'has_setting:app_name'], function() {
    Route::get('/', 'HomeController@showIndex');
    Route::get('/incident/{incident}', 'HomeController@showIncident');

    Route::get('/auth/login', 'AuthController@showLogin')->before('guest');
    Route::post('/auth/login', 'AuthController@postLogin')->before('guest|csrf');
});

Route::group(['before' => 'no_setup:app_name'], function() {
    Route::get('/setup', 'SetupController@showSetup');
    Route::group(['before' => 'csrf'], function() {
        Route::post('/setup', 'SetupController@setupCachet');
    });
});

Route::group(['before' => 'auth'], function() {
    // Dashboard/Management Panel etc.
    Route::get('/dashboard', 'DashboardController@showDashboard');

    // Authorization stuff.
    Route::get('/auth/logout', 'AuthController@logoutAction');
});

Route::get('/rss', 'RSSController@feedAction');
