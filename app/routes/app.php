<?php

// Prevent access until the app is setup.
Route::group(['before' => 'has_setting:app_name', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::get('/', [
        'as'   => 'status-page',
        'uses' => 'HomeController@showIndex',
    ]);
    Route::get('/incident/{incident}', 'HomeController@showIncident');
});

Route::group(['namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::get('/atom/{component_group?}', 'AtomController@feedAction');
    Route::get('/rss/{component_group?}', 'RssController@feedAction');
});
