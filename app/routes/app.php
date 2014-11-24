<?php

	Route::get('/', 'HomeController@showIndex');
	Route::get('/incident/{incident}', 'HomeController@showIncident');

	Route::group(['before' => 'no_setup:app_name'], function() {
		Route::get('/setup', 'SetupController@showSetup');
		Route::group(['before' => 'csrf'], function() {
			Route::post('/setup', 'SetupController@setupCachet');
		});
	});

	Route::get('/auth/login', 'AuthController@showLogin')->before('guest');
	Route::post('/auth/login', 'AuthController@postLogin')->before('guest|csrf');

	Route::group(['before' => 'auth'], function() {
		// Dashboard/Management Panel etc.
		Route::get('/dashboard', 'DashboardController@showDashboard');

		// Authorization stuff.
		Route::get('/auth/logout', 'AuthController@logoutAction');
	});
