<?php

	Route::get('/', 'HomeController@showIndex');
	Route::get('/incident/{incident}', 'HomeController@showIncident');

	Route::group(['before' => 'no_setup:app_name'], function() {
		Route::get('/setup', 'SetupController@showSetup');
	});
