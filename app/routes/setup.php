<?php

// Setup route.
Route::group(['before' => 'is_setup', 'namespace' => 'CachetHQ\Cachet\Http\Controllers'], function () {
    Route::controller('/setup', 'SetupController');
});
