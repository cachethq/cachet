<?php

Route::group(['before' => 'has_setting:app_name'], function () {
    Route::get('/auth/login', ['before' => 'guest', 'as' => 'login', 'uses' => 'AuthController@showLogin']);
    Route::post('/auth/login', ['before' => 'guest|csrf', 'as' => 'logout', 'uses' => 'AuthController@postLogin']);
});

Route::get('/auth/logout', ['before' => 'auth', 'as' => 'logout', 'uses' => 'AuthController@logoutAction']);
