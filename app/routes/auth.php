<?php

Route::group(['before' => 'has_setting:app_name', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    // Login routes
    Route::get('/auth/login', [
        'before' => 'guest',
        'after'  => 'sslfix',
        'as'     => 'login',
        'uses'   => 'AuthController@showLogin',
    ]);
    Route::post('/auth/login', [
        'before' => 'guest|csrf|login_throttling',
        'as'     => 'logout',
        'uses'   => 'AuthController@postLogin',
    ]);
});

Route::group(['before' => 'auth', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::get('/auth/logout', [
        'as'   => 'logout',
        'uses' => 'AuthController@logoutAction',
    ]);
});
