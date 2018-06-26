<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$app = new Illuminate\Foundation\Application(realpath(__DIR__.'/../'));

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(Illuminate\Contracts\Http\Kernel::class, CachetHQ\Cachet\Http\Kernel::class);

$app->singleton(Illuminate\Contracts\Console\Kernel::class, CachetHQ\Cachet\Console\Kernel::class);

$app->singleton(Illuminate\Contracts\Debug\ExceptionHandler::class, GrahamCampbell\Exceptions\ExceptionHandler::class);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
