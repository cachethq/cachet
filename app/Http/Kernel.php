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
        \Fideloper\Proxy\TrustProxies::class,
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Cookie\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'accept'          => \CachetHQ\Cachet\Http\Middleware\Acceptable::class,
        'admin'           => \CachetHQ\Cachet\Http\Middleware\Admin::class,
        'app.hasSetting'  => \CachetHQ\Cachet\Http\Middleware\HasSetting::class,
        'app.isSetup'     => \CachetHQ\Cachet\Http\Middleware\AppIsSetup::class,
        'app.subscribers' => \CachetHQ\Cachet\Http\Middleware\SubscribersConfigured::class,
        'auth'            => \CachetHQ\Cachet\Http\Middleware\Authenticate::class,
        'auth.api'        => \CachetHQ\Cachet\Http\Middleware\ApiAuthenticate::class,
        'auth.basic'      => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'csrf'            => \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
        'guest'           => \CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated::class,
        'localize'        => \CachetHQ\Cachet\Http\Middleware\Localize::class,
        'throttling'      => \GrahamCampbell\Throttle\Http\Middleware\ThrottleMiddleware::class,
    ];
}
