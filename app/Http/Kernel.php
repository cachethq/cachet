<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http;

use Barryvdh\Cors\HandleCors;
use CachetHQ\Cachet\Http\Middleware\Admin;
use CachetHQ\Cachet\Http\Middleware\ApiAuthentication;
use CachetHQ\Cachet\Http\Middleware\Authenticate;
use CachetHQ\Cachet\Http\Middleware\Localize;
use CachetHQ\Cachet\Http\Middleware\ReadyForUse;
use CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated;
use CachetHQ\Cachet\Http\Middleware\SetupAlreadyCompleted;
use CachetHQ\Cachet\Http\Middleware\SubscribersConfigured;
use CachetHQ\Cachet\Http\Middleware\Throttler;
use CachetHQ\Cachet\Http\Middleware\TrustProxies;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        TrustProxies::class,
        CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'admin'       => Admin::class,
        'can'         => Authorize::class,
        'cors'        => HandleCors::class,
        'auth'        => Authenticate::class,
        'auth.api'    => ApiAuthentication::class,
        'guest'       => RedirectIfAuthenticated::class,
        'localize'    => Localize::class,
        'ready'       => ReadyForUse::class,
        'setup'       => SetupAlreadyCompleted::class,
        'subscribers' => SubscribersConfigured::class,
        'throttle'    => Throttler::class,
    ];
}
