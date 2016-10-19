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

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Fideloper\Proxy\TrustProxies',
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            'Illuminate\Cookie\Middleware\EncryptCookies',
            'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
            'Illuminate\Session\Middleware\StartSession',
            'Illuminate\View\Middleware\ShareErrorsFromSession',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
        ],
        'api' => [
            'Barryvdh\Cors\HandleCors',
            'CachetHQ\Cachet\Http\Middleware\Acceptable',
            'CachetHQ\Cachet\Http\Middleware\Timezone',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'admin'       => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'bindings'    => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can'         => \Illuminate\Auth\Middleware\Authorize::class,
        'auth.api'    => 'CachetHQ\Cachet\Http\Middleware\ApiAuthentication',
        'guest'       => 'CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated',
        'localize'    => 'CachetHQ\Cachet\Http\Middleware\Localize',
        'ready'       => 'CachetHQ\Cachet\Http\Middleware\ReadyForUse',
        'setup'       => 'CachetHQ\Cachet\Http\Middleware\SetupAlreadyCompleted',
        'subscribers' => 'CachetHQ\Cachet\Http\Middleware\SubscribersConfigured',
        'throttle'    => 'AltThree\Throttle\ThrottlingMiddleware',
    ];
}
