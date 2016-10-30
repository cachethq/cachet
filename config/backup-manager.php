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
    'local' => [
        'type' => 'Local',
        'root' => database_path('backups'),
    ],
    's3' => [
        'type'   => 'AwsS3',
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'root'   => '',
    ],
    'gcs' => [
        'type'   => 'Gcs',
        'key'    => '',
        'secret' => '',
        'bucket' => '',
        'root'   => '',
    ],
    'rackspace' => [
        'type'      => 'Rackspace',
        'username'  => '',
        'key'       => '',
        'container' => '',
        'zone'      => '',
        'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
        'root'      => '',
    ],
    'dropbox' => [
        'type'   => 'Dropbox',
        'token'  => '',
        'key'    => '',
        'secret' => '',
        'app'    => '',
        'root'   => '',
    ],
    'ftp' => [
        'type'     => 'Ftp',
        'host'     => '',
        'username' => '',
        'password' => '',
        'port'     => 21,
        'passive'  => true,
        'ssl'      => true,
        'timeout'  => 30,
        'root'     => '',
    ],
    'sftp' => [
        'type'       => 'Sftp',
        'host'       => '',
        'username'   => '',
        'password'   => '',
        'port'       => 21,
        'timeout'    => 10,
        'privateKey' => '',
        'root'       => '',
    ],
];
