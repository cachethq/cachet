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
    | Loggers
    |--------------------------------------------------------------------------
    |
    | Here are each of the loggers to call under the hood while logging.
    |
    */

    'loggers' => env('APP_DEBUG', false) ? ['Illuminate\Log\Writer' => ['*']] : ['Bugsnag\BugsnagLaravel\LaravelLogger' => ['*']],

];
