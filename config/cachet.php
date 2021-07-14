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
    | Cachet Timezone
    |--------------------------------------------------------------------------
    |
    | The timezone Cachet uses for converting timezones on saving.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Docker
    |--------------------------------------------------------------------------
    |
    | Is the installation running under a Docker container?
    |
    */

    'is_docker' => env('DOCKER', false),

    /*
    |--------------------------------------------------------------------------
    | Force HTTPS URLs
    |--------------------------------------------------------------------------
    |
    | Is the installation running under a Docker container?
    |
    */

    'force_https_urls' => env('FORCE_HTTPS_URLS', false),

    /*
    |--------------------------------------------------------------------------
    | Beacon
    |--------------------------------------------------------------------------
    |
    | Has the installation agreed to sending us Beacon data?
    |
    | Default: true
    |
    */

    'beacon' => env('CACHET_BEACON', true),

];
