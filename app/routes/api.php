<?php

	Route::api(['version' => 'v1', 'prefix' => 'api'], function() {

		Route::get('components', 'ApiController@getComponents');
		Route::get('components/{id}', 'ApiController@getComponent');
		Route::get('components/{id}/incidents', 'ApiController@getComponentIncidents');
		Route::get('incidents', 'ApiController@getIncidents');
		Route::get('incidents/{id}', 'ApiController@getIncident');

		Route::group(['protected' => true], function() {
			Route::post('components', 'ApiController@postComponents');
			Route::post('incidents', 'ApiController@postIncidents');
		});

	});
