<?php

Route::group([
    'prefix'    => 'auth',
    'namespace' => 'CachetHQ\Cachet\Http\Controllers',
], function () {
    Route::group(['before' => 'has_setting:app_name'], function () {
        // Login routes
        Route::get('login', [
            'before' => 'guest',
            'as'     => 'login',
            'uses'   => 'AuthController@showLogin',
        ]);

        Route::post('login', [
            'before' => 'guest|csrf|login_throttling',
            'as'     => 'logout',
            'uses'   => 'AuthController@postLogin',
        ]);

        // Two factor authorization
        Route::get('2fa', [
            'as'   => 'two-factor',
            'uses' => 'AuthController@showTwoFactorAuth',
        ]);

        Route::post('2fa', 'AuthController@postTwoFactor');
    });

    Route::group(['before' => 'auth'], function () {
        Route::get('logout', [
            'as'   => 'logout',
            'uses' => 'AuthController@logoutAction',
        ]);
    });
});
