<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Cachet Enabled
    |--------------------------------------------------------------------------
    |
    | This option determines if Cachet is enabled. If Cachet is not enabled,
    | the status page will not be accessible. This is useful when you need
    | to disable the status page for maintenance or other reasons.
    |
    */
    'enabled' => env('CACHET_ENABLED', true),

    /*
     |--------------------------------------------------------------------------
     | Cachet Path
     |--------------------------------------------------------------------------
     |
     | This is the URI path where Cachet will be accessible from.
     */
    'path' => env('CACHET_PATH', 'status'),

    'guard' => env('CACHET_GUARD', null),

    /*
     |--------------------------------------------------------------------------
     | The User Model.
     |--------------------------------------------------------------------------
     |
     | This is the model that will be used to authenticate users. This model
     | must be an instance of Illuminate\Foundation\Auth\User.
     */
    'user_model' => App\Models\User::class,

    /*
     |--------------------------------------------------------------------------
     | Cachet Domain
     |--------------------------------------------------------------------------
     |
     | This is the domain where Cachet will be accessible from.
     |
     */
    'domain' => env('CACHET_DOMAIN'),

    /*
     |--------------------------------------------------------------------------
     | Cachet Title
     |--------------------------------------------------------------------------
     |
     | This is the title of the status page. By default, this will be the name
     | of your application.
     |
     */
    'title' => env('CACHET_TITLE', env('APP_NAME').' - Status'),

    /*
     |--------------------------------------------------------------------------
     | Cachet Middleware
     |--------------------------------------------------------------------------
     |
     | This is the middleware that will be applied to the status page. By
     | default, the "web" middleware group will be applied, which means
     | that the status page will be accessible by anyone.
     |
     */
    'middleware' => [
        'web',
    ],

    'api_middleware' => [
        'api',
    ],

    /*
     |--------------------------------------------------------------------------
     | Cachet API Rate Limit (attempts per minute)
     |--------------------------------------------------------------------------
     |
     | This is the rate limit for the Cachet API. By default, the API is rate
     | limited to 300 requests a minute (or 5 requests a second). You can
     | adjust the limit as needed by your application.
     |
     */
    'api_rate_limit' => env('CACHET_API_RATE_LIMIT', 300),

    'beacon' => env('CACHET_BEACON', true),
];
