<?php

$dbURL = parse_url(getenv('DATABASE_URL'));
$dbName = substr($dbURL["path"], 1);

return [
    'APP_DEBUG'    => getenv('APP_DEBUG') ?: false,
    'DB_HOST'      => $dbURL['host'],
    'DB_DATABASE'  => $dbName,
    'DB_USERNAME'  => $dbURL['user'],
    'DB_PASSWORD'  => $dbURL['pass'],
    'DB_DRIVER'    => 'pgsql',
    'CACHE_DRIVER' => 'apc',
];
