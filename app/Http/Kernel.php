<?php

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
        'csrf'               => 'CachetHQ\Cachet\Http\Middleware\VerifyCsrfToken',
        'admin'              => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'login.throttling'   => 'CachetHQ\Cachet\Http\Middleware\LoginThrottling',
        'app.isSetup'        => 'CachetHQ\Cachet\Http\Middleware\AppIsSetup',
        'app.hasSetting'     => 'CachetHQ\Cachet\Http\Middleware\HasSetting',
        'allowedDomains'     => 'CachetHQ\Cachet\Http\Middleware\AllowedDomains',
        'cors'               => 'CachetHQ\Cachet\Http\Middleware\Cors',
    ];
}
