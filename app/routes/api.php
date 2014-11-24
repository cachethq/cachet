<?php

Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{

	Route::get('components', 'ApiController@getComponents');

});
