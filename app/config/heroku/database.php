<?php

$dbURL = parse_url(getenv('CLEARDB_DATABASE_URL'));
$dbName = substr($dbURL["path"], 1);

return array(
    'default' => 'cleardb',
    'connections' => array(
        'cleardb' => array(
            'driver'    => 'mysql',
            'host'      => $dbURL['host'],
            'database'  => $dbName,
            'username'  => $dbURL['user'],
            'password'  => $dbURL['pass'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
    )
);
