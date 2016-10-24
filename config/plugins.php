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
    | Enable/Disable Plugins
    |--------------------------------------------------------------------------
    |
    | Whether or not to enable the plugin system.
    |
    */

    'enabled'    => env('PLUGINS_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Plugin Repository
    |--------------------------------------------------------------------------
    |
    | The plugin repository configuration.
    |
    */

    'repository' => [
        'schema'   => env('PLUGINS_REPOSITORY_SCHEMA', 'https://'),
        'domain'   => env('PLUGINS_REPOSITORY_DOMAIN', 'marketplace.cachethq.io'),

        'search'   => env('PLUGINS_REPOSITORY_SEARCH', '/api/plugins?terms=:terms:&order=:order:&limit=:limit:'),
        'author'   => env('PLUGINS_REPOSITORY_AUTHOR', '/api/plugins/:author:'),
        'plugin'   => env('PLUGINS_REPOSITORY_PLUGIN', '/api/plugins/:author:/:plugin:'),
        'version'  => env('PLUGINS_REPOSITORY_VERSION', '/api/plugins/:author:/:plugin:/:version:'),
        'download' => env('PLUGINS_REPOSITORY_DOWNLOAD', '/api/plugins/:author:/:plugin:/:version:/download'),
    ],

];
