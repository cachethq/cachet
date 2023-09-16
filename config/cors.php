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
     | Laravel CORS
     |--------------------------------------------------------------------------
     |
     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */

    'supports_credentials'    => false,
    'allowed_origins'         => ['*'],
    'allowed_originsPatterns' => [],
    'allowed_headers'         => ['X-Cachet-Token'],
    'allowed_methods'         => ['*'],
    'exposed_headers'         => [],
    'max_age'                 => 3600,

];
