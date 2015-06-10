<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
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
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'               => 'CachetHQ\Cachet\Http\Middleware\Authenticate',
        'auth.api'           => 'CachetHQ\Cachet\Http\Middleware\ApiAuthenticate',
        'auth.basic'         => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest'              => 'CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated',
        'csrf'               => 'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
        'admin'              => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'login.throttling'   => 'CachetHQ\Cachet\Http\Middleware\LoginThrottling',
        'app.isSetup'        => 'CachetHQ\Cachet\Http\Middleware\AppIsSetup',
        'app.hasSetting'     => 'CachetHQ\Cachet\Http\Middleware\HasSetting',
    ];
}
