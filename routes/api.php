<?php

use Illuminate\Http\Request;

Route::group([
    'namespace'  => 'Api',
    'prefix'     => 'api/v1',
], function () {
    Route::group(['middleware' => ['auth.api', 'cors']], function () {
        Route::get('components', 'ComponentController@index');
        Route::get('components/groups', 'ComponentGroupController@index');
        Route::get('components/groups/{component_group}', 'ComponentGroupController@show');
        Route::get('components/{component}', 'ComponentController@show');

        Route::get('incidents', 'IncidentController@index');

        Route::get('incidents/templates', 'IncidentTemplateController@index');
        Route::get('incidents/templates/{incident_template}', 'IncidentTemplateController@show');

        Route::get('incidents/{incident}', 'IncidentController@show');
        Route::get('incidents/{incident}/updates', 'IncidentUpdateController@index');
        Route::get('incidents/{incident}/updates/{update}', 'IncidentUpdateController@show');

        Route::get('metrics', 'MetricController@index');
        Route::get('metrics/{metric}', 'MetricController@show');
        Route::get('metrics/{metric}/points', 'MetricPointController@index');

        Route::get('schedules', 'ScheduleController@index');
        Route::get('schedules/{schedule}', 'ScheduleController@show');
    });

    Route::group(['middleware' => ['auth.api:true']], function () {
        Route::get('subscribers', 'SubscriberController@index');

        Route::post('components', 'ComponentController@store');
        Route::post('components/groups', 'ComponentGroupController@store');
        Route::post('incidents', 'IncidentController@store');
        Route::post('incidents/{incident}/updates', 'IncidentUpdateController@store');
        Route::post('metrics', 'MetricController@store');
        Route::post('metrics/{metric}/points', 'MetricPointController@store');
        Route::post('schedules', 'ScheduleController@store');
        Route::post('subscribers', 'SubscriberController@store');

        Route::put('components/groups/{component_group}', 'ComponentGroupController@update');
        Route::put('components/{component}', 'ComponentController@update');
        Route::put('incidents/{incident}', 'IncidentController@update');
        Route::put('incidents/{incident}/updates/{update}', 'IncidentUpdateController@update');
        Route::put('metrics/{metric}', 'MetricController@update');
        Route::put('metrics/{metric}/points/{metric_point}', 'MetricPointController@update');
        Route::put('schedules/{schedule}', 'ScheduleController@update');

        Route::delete('components/groups/{component_group}', 'ComponentGroupController@destroy');
        Route::delete('components/{component}', 'ComponentController@destroy');
        Route::delete('incidents/{incident}', 'IncidentController@destroy');
        Route::delete('incidents/{incident}/updates/{update}', 'IncidentUpdateController@destroy');
        Route::delete('metrics/{metric}', 'MetricController@destroy');
        Route::delete('metrics/{metric}/points/{metric_point}', 'MetricPointController@destroy');
        Route::delete('schedules/{schedule}', 'ScheduleController@destroy');
        Route::delete('subscribers/{subscriber}', 'SubscriberController@destroy');
        Route::delete('subscriptions/{subscription}', 'SubscriptionController@destroy');
    });
});
