<?php

$dbURL = parse_url(getenv('CLEARDB_DATABASE_URL'));
$dbName = substr($dbURL["path"], 1);

return array(

    'DB_HOST' => $dbURL['host'],
    'DB_DATABASE' => $dbName,
    'DB_USERNAME' => $dbURL['user'],
    'DB_PASSWORD' => $dbURL['pass'],
    'DB_DRIVER' => 'mysql',

);



