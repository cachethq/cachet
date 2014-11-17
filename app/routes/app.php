<?php

	Route::get('/', 'HomeController@showIndex');
	Route::get('/incident/{incident}', 'HomeController@showIncident');
