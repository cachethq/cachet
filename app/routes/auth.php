<?php

Route::group(['before' => 'has_setting:app_name', 'namespace' => 'CachetHQ\Cachet\Controllers'], function () {
    Route::get('/auth/login', ['before' => 'guest', 'as' => 'login', 'uses' => 'AuthController@showLogin']);
    Route::post('/auth/login', ['before' => 'guest|csrf|login_throttling', 'as' => 'logout', 'uses' => 'AuthController@postLogin']);
});

Route::group(['before' => 'auth', 'namespace' => 'CachetHQ\Cachet\Controllers'], function () {
    Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'AuthController@logoutAction']);
});
