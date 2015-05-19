<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Automatic Blade Optimizations
    |--------------------------------------------------------------------------
    |
    | This option enables minification of the the blade views as they are
    | compiled. These optimizations have little impact on php processing time
    | as the optimizations are only applied once and are cached. This package
    | will do nothing by default to allow it to be used without minifying
    | pages automatically.
    |
    | Default: false
    |
    */

    'blade' => true,

    /*
    |--------------------------------------------------------------------------
    | Force Blade Optimizations
    |--------------------------------------------------------------------------
    |
    | This option forces blade minification on views where there such
    | minification may be dangerous. This should only be used if you are fully
    | aware of the potential issues this may cause. Obviously, this setting is
    | dependent on blade minification actually being enabled.
    |
    | PLEASE USE WITH CAUTION
    |
    | Default: false
    |
    */

    'force' => false,

    /*
    |--------------------------------------------------------------------------
    | Automatic Live Optimizations
    |--------------------------------------------------------------------------
    |
    | This option enables minification of the html responses just before they
    | are served. These optimizations have greater impact on php processing
    | time as the optimizations are applied on every request. This package
    | will do nothing by default to allow it to be used without minifying
    | pages automatically.
    |
    | Default: false
    |
    */

    'live' => false,

];
