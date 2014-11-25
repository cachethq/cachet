<?php

	Route::api(['version' => 'v1', 'prefix' => 'api'], function() {

		Route::get('components', 'ApiController@getComponents');
		Route::get('components/{id}', 'ApiController@getComponent');
		Route::get('components/{id}/incidents', 'ApiController@getComponentIncidents');

	});
