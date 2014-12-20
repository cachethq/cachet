<?php

Route::api([
    'version'   => 'v1',
    'namespace' => 'CachetHQ\Cachet\Controllers\Api',
    'after'     => 'allowed_domains',
], function () {
    Route::get('components', 'ComponentController@getComponents');
    Route::get('components/{id}', 'ComponentController@getComponent');
    Route::get('components/{id}/incidents', 'ComponentController@getComponentIncidents');
    Route::get('incidents', 'IncidentController@getIncidents');
    Route::get('incidents/{id}', 'IncidentController@getIncident');
    Route::get('metrics', 'MetricController@getMetrics');
    Route::get('metrics/{id}', 'MetricController@getMetric');
    Route::get('metrics/points/{id}', 'MetricPointController@getMetricPoint');

    Route::group(['protected' => true], function () {
        Route::post('components', 'ComponentController@postComponents');
        Route::post('incidents', 'IncidentController@postIncidents');
        Route::post('metrics', 'MetricController@postMetrics');
        Route::post('metrics/points', 'MetricPointController@postMetricPoints');

        Route::put('components/{id}', 'ComponentController@putComponent');
        Route::put('incidents/{id}', 'IncidentController@putIncident');
        Route::put('metrics/{id}', 'MetricController@putMetric');
    });
});
