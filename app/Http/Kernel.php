<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http;

use Barryvdh\Cors\HandleCors;
use App\Http\Middleware\Admin;
use App\Http\Middleware\ApiAuthentication;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CacheControl;
use App\Http\Middleware\Localize;
use App\Http\Middleware\ReadyForUse;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RemoteUserAuthenticate;
use App\Http\Middleware\SetupAlreadyCompleted;
use App\Http\Middleware\SubscribersConfigured;
use App\Http\Middleware\Throttler;
use App\Http\Middleware\TrustProxies;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode;
use Illuminate\Routing\Middleware\ValidateSignature;

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
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        'api' => [
            'bindings',
            \App\Http\Middleware\Acceptable::class,
            \App\Http\Middleware\Timezone::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'admin'           => Admin::class,
        'auth.api'        => ApiAuthentication::class,
        'auth.remoteuser' => RemoteUserAuthenticate::class,
        'auth'            => Authenticate::class,
        'cache'           => CacheControl::class,
        'can'             => Authorize::class,
        'cors'            => HandleCors::class,
        'guest'           => RedirectIfAuthenticated::class,
        'localize'        => Localize::class,
        'ready'           => ReadyForUse::class,
        'setup'           => SetupAlreadyCompleted::class,
        'signed'          => ValidateSignature::class,
        'subscribers'     => SubscribersConfigured::class,
        'throttle'        => Throttler::class,
    ];
}
