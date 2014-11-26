<?php

	Route::api(['version' => 'v1', 'prefix' => 'api', 'namespace' => 'CachetHq\Cachet\Controllers\Api'], function() {

		Route::get('components', 'ComponentController@getComponents');
		Route::get('components/{id}', 'ComponentController@getComponent');
		Route::get('components/{id}/incidents', 'ComponentController@getComponentIncidents');
		Route::get('incidents', 'IncidentController@getIncidents');
		Route::get('incidents/{id}', 'IncidentController@getIncident');
		Route::get('metrics', 'IncidentController@getMetrics');
		Route::get('metrics/{id}', 'IncidentController@getMetric');

		Route::group(['protected' => true], function() {
			Route::post('components', 'ComponentController@postComponents');
			Route::post('incidents', 'IncidentController@postIncidents');
			Route::post('metrics', 'IncidentController@postMetrics');

			Route::put('components/{id}', 'ComponentController@putComponent');
			Route::put('incidents/{id}', 'IncidentController@putIncident');
			Route::put('metrics/{id}', 'IncidentController@putMetric');
		});

	});
