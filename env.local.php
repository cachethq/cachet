<?php

return [
    'DB_DRIVER'   => 'mysql',
    'DB_HOST'     => getEnv("OPENSHIFT_MYSQL_DB_HOST"),
    'DB_DATABASE' => getEnv("OPENSHIFT_APP_NAME"),
    'DB_USERNAME' => getEnv("OPENSHIFT_MYSQL_DB_USERNAME"),
    'DB_PASSWORD' => getEnv("OPENSHIFT_MYSQL_DB_PASSWORD"),
];
