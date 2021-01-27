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
    | Beacon
    |--------------------------------------------------------------------------
    |
    | Has the installation agreed to sending us Beacon data?
    |
    | Default: true
    |
    */

    'beacon' => env('CACHET_BEACON', true),

    /*
    |--------------------------------------------------------------------------
    | Internet Lookups
    |--------------------------------------------------------------------------
    |
    | Should Cachet make outbound HTTP requests to the internet to load external
    | resources. Turn off if you're behind a Firewall with no HTTP(S) egress.
    |
    */

    'internet_lookups' => env('CACHET_INTERNET_LOOKUPS', true),

];
