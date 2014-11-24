<?php

	Route::get('/', 'HomeController@showIndex');
	Route::get('/incident/{incident}', 'HomeController@showIncident');

	Route::group(['before' => 'no_setup:app_name'], function() {
		Route::get('/setup', 'SetupController@showSetup');
		Route::group(['before' => 'csrf'], function() {
			Route::post('/setup', 'SetupController@setupCachet');
		});
	});

	Route::group(['before' => 'auth'], function() {
		Route::get('/dashboard', 'DashboardController@showDashboard');
	});
