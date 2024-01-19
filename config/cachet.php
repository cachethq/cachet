<?php

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
    'path' => env('CACHET_PATH', ''),

    'guard' => env('CACHET_GUARD', null),

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
     | Cachet Major Outage Threshold
     |--------------------------------------------------------------------------
     |
     | This is the threshold at which a major outage is declared.
     |
     */
    'major_outage' => 50.0,

    'beacon' => env('CACHET_BEACON', true),
];
