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
        'accept'          => 'CachetHQ\Cachet\Http\Middleware\Acceptable',
        'admin'           => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'app.hasSetting'  => 'CachetHQ\Cachet\Http\Middleware\HasSetting',
        'app.isSetup'     => 'CachetHQ\Cachet\Http\Middleware\AppIsSetup',
        'app.subscribers' => 'CachetHQ\Cachet\Http\Middleware\SubscribersConfigured',
        'auth'            => 'CachetHQ\Cachet\Http\Middleware\Authenticate',
        'auth.api'        => 'CachetHQ\Cachet\Http\Middleware\ApiAuthenticate',
        'auth.basic'      => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'csrf'            => 'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
        'guest'           => 'CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated',
        'localize'        => 'CachetHQ\Cachet\Http\Middleware\Localize',
        'throttling'      => 'GrahamCampbell\Throttle\Http\Middleware\ThrottleMiddleware',
    ];
}
