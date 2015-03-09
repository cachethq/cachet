<?php

return [
    'APP_DEBUG'    => getenv('APP_DEBUG') ?: false,
    'DB_DRIVER'    => 'mysql',
    'DB_HOST'      => 'localhost',
    'DB_DATABASE'  => 'cachet',
    'DB_USERNAME'  => 'homestead',
    'DB_PASSWORD'  => 'secret',
    'CACHE_DRIVER' => 'apc',
];
