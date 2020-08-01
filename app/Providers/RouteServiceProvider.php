<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Http\Middleware\Acceptable;
use CachetHQ\Cachet\Http\Middleware\Authenticate;
use CachetHQ\Cachet\Http\Middleware\RemoteUserAuthenticate;
use CachetHQ\Cachet\Http\Middleware\Timezone;
use CachetHQ\Cachet\Http\Middleware\VerifyCsrfToken;
use CachetHQ\Cachet\Http\Routes\ApiSystemRoutes;
use CachetHQ\Cachet\Http\Routes\AuthRoutes;
use CachetHQ\Cachet\Http\Routes\Setup\ApiRoutes as ApiSetupRoutes;
use CachetHQ\Cachet\Http\Routes\SetupRoutes;
use CachetHQ\Cachet\Http\Routes\SignupRoutes;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Router;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

/**
 * This is the route service provider.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'CachetHQ\Cachet\Http\Controllers';

    /**
     * These are the route files that should always be available anonymously.
     *
     * When applying the always_authenticate feature, these routes will be skipped.
     *
     * @var string[]
     */
    protected $whitelistedAuthRoutes = [
        AuthRoutes::class,
        SetupRoutes::class,
        SignupRoutes::class,
        ApiSystemRoutes::class,
        ApiSetupRoutes::class,
    ];

    /**
     * Define the route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->app->call([$this, 'bind']);
    }

    /**
     * Define the bindings for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function bind(Router $router)
    {
        $router->model('component', 'CachetHQ\Cachet\Models\Component');
        $router->model('component_group', 'CachetHQ\Cachet\Models\ComponentGroup');
        $router->model('incident', 'CachetHQ\Cachet\Models\Incident');
        $router->model('incident_template', 'CachetHQ\Cachet\Models\IncidentTemplate');
        $router->model('incident_update', 'CachetHQ\Cachet\Models\IncidentUpdate');
        $router->model('metric', 'CachetHQ\Cachet\Models\Metric');
        $router->model('metric_point', 'CachetHQ\Cachet\Models\MetricPoint');
        $router->model('schedule', 'CachetHQ\Cachet\Models\Schedule');
        $router->model('setting', 'CachetHQ\Cachet\Models\Setting');
        $router->model('subscriber', 'CachetHQ\Cachet\Models\Subscriber');
        $router->model('subscription', 'CachetHQ\Cachet\Models\Subscription');
        $router->model('tag', 'CachetHQ\Cachet\Models\Tag');
        $router->model('user', 'CachetHQ\Cachet\Models\User');
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'as' => 'core::'], function (Router $router) {
            $path = app_path('Http/Routes');

            $applyAlwaysAuthenticate = $this->app['config']->get('setting.always_authenticate', false);
            $AllFileIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            $PhpFileIterator = new \RegexIterator($AllFileIterator, '/^.+\.php$/i', \RecursiveRegexIterator::GET_MATCH);

            foreach ($PhpFileIterator as $file => $object) {
                $class = substr($file, strlen($path));
                $class = str_replace('/', '\\', $class);
                $class = substr($class, 0, -4);

                $routes = $this->app->make("CachetHQ\\Cachet\\Http\\Routes${class}");

                if ($routes::$browser) {
                    $this->mapForBrowser($router, $routes, $applyAlwaysAuthenticate);
                } else {
                    $this->mapOtherwise($router, $routes, $applyAlwaysAuthenticate);
                }
            }
        });
    }

    /**
     * Wrap the routes in the browser specific middleware.
     *
     * @param \Illuminate\Routing\Router $router
     * @param object                     $routes
     * @param bool                       $applyAlwaysAuthenticate
     *
     * @return void
     */
    protected function mapForBrowser(Router $router, $routes, $applyAlwaysAuthenticate)
    {
        $middleware = [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
        ];

        if ($applyAlwaysAuthenticate && !$this->isWhiteListedAuthRoute($routes)) {
            $middleware[] = RemoteUserAuthenticate::class;
            $middleware[] = Authenticate::class;
        }

        $router->group(['middleware' => $middleware], function (Router $router) use ($routes) {
            $routes->map($router);
        });
    }

    /**
     * Wrap the routes in the basic middleware.
     *
     * @param \Illuminate\Routing\Router $router
     * @param object                     $routes
     * @param bool                       $applyAlwaysAuthenticate
     *
     * @return void
     */
    protected function mapOtherwise(Router $router, $routes, $applyAlwaysAuthenticate)
    {
        $middleware = [
            SubstituteBindings::class,
            Acceptable::class,
            Timezone::class,
        ];

        if ($applyAlwaysAuthenticate && !$this->isWhiteListedAuthRoute($routes)) {
            $middleware[] = 'auth.api:true';
        }

        $router->group(['middleware' => $middleware], function (Router $router) use ($routes) {
            $routes->map($router);
        });
    }

    /**
     * Validates if the route object is an instance of the whitelisted routes.
     * A small workaround since we cant use multiple classes in a `instanceof` comparison.
     *
     * @param object $routes
     *
     * @return bool
     */
    private function isWhiteListedAuthRoute($routes)
    {
        foreach ($this->whitelistedAuthRoutes as $whitelistedRoute) {
            if (is_a($routes, $whitelistedRoute)) {
                return true;
            }
        }

        return false;
    }
}
