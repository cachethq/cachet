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
            'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
        ],
        'api' => [
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
        'admin'             => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'app.hasSetting'    => 'CachetHQ\Cachet\Http\Middleware\HasSetting',
        'app.isSetup'       => 'CachetHQ\Cachet\Http\Middleware\AppIsSetup',
        'app.subscribers'   => 'CachetHQ\Cachet\Http\Middleware\SubscribersConfigured',
        'auth'              => 'CachetHQ\Cachet\Http\Middleware\Authenticate',
        'auth.api.optional' => 'CachetHQ\Cachet\Http\Middleware\ApiOptionalAuthenticate',
        'auth.api.required' => 'CachetHQ\Cachet\Http\Middleware\ApiAuthenticate',
        'guest'             => 'CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated',
        'localize'          => 'CachetHQ\Cachet\Http\Middleware\Localize',
        'throttling'        => 'GrahamCampbell\Throttle\Http\Middleware\ThrottleMiddleware',
    ];
}
