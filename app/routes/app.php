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

	Route::get('/rss', function() {
		$feed = RSS::feed('2.0', 'UTF-8');
		$feed->channel([
			'title' => Setting::get('app_name'),
			'description' => 'Status Feed',
			'link' => Setting::get('app_domain'),
		]);

		Incident::get()->map(function($incident) use ($feed) {
			$feed->item([
				'title' => $incident->name,
				'message' => $incident->message,
				'component' => $incident->parent->name,
				'status' => $incident->humanStatus,
				'created_at' => $incident->created_at,
				'updated_at' => $incident->updated_at
			]);
		});

		return Response::make($feed, 200, [
			'Content-Type' => 'text/xml'
		]);
	});
