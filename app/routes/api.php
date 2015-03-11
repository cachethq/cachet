<?php

Route::api([
    'after'     => 'allowed_domains',
    'namespace' => 'CachetHQ\Cachet\Http\Controllers\Api',
    'version'   => 'v1',
], function () {
    // Components
    Route::get('components', 'ComponentController@getComponents');
    Route::get('components/{id}', 'ComponentController@getComponent');

    // Incidents
    Route::get('incidents', 'IncidentController@getIncidents');
    Route::get('incidents/{id}', 'IncidentController@getIncident');

    // Metrics
    Route::get('metrics', 'MetricController@getMetrics');
    Route::get('metrics/{id}', 'MetricController@getMetric');
    Route::get('metrics/{id}/points', 'MetricController@getMetricPoints');

    // Api protected
    Route::group(['protected' => true], function () {
        Route::post('components', 'ComponentController@postComponents');
        Route::post('incidents', 'IncidentController@postIncidents');
        Route::post('metrics', 'MetricController@postMetrics');
        Route::post('metrics/{id}/points', 'MetricPointController@postMetricPoints');

        Route::put('components/{id}', 'ComponentController@putComponent');
        Route::put('incidents/{id}', 'IncidentController@putIncident');
        Route::put('metrics/{id}', 'MetricController@putMetric');
        Route::put('metrics/{id}/points/{metric_id}', 'MetricPointController@putMetricPoint');

        Route::delete('components/{id}', 'ComponentController@deleteComponent');
        Route::delete('incidents/{id}', 'IncidentController@deleteIncident');
        Route::delete('metrics/{id}', 'MetricController@deleteMetric');
    });
});
