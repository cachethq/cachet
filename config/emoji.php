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
    | GitHub Token
    |--------------------------------------------------------------------------
    |
    | Here you may get us to use your personal github access token to increase
    | your rate limit while contacting GitHub's API.
    |
    */

    'token' => env('GITHUB_TOKEN', null),

    /*
    |--------------------------------------------------------------------------
    | Cache Connection
    |--------------------------------------------------------------------------
    |
    | Here you may tell us what cache connection to use. To use the default,
    | set this to null.
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Cache Key
    |--------------------------------------------------------------------------
    |
    | Here you may tell us what cache key to use for storing the emoji map.
    |
    */

    'key' => 'emoji',

    /*
    |--------------------------------------------------------------------------
    | Cache Life
    |--------------------------------------------------------------------------
    |
    | Here you may tell us how long in minutes to cache the emoji map.
    |
    */

    'life' => 10080,

];
