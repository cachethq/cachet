<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Foundation\Providers;

use App\Http\Middleware\Acceptable;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RemoteUserAuthenticate;
use App\Http\Middleware\Timezone;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Routes\ApiSystemRoutes;
use App\Http\Routes\AuthRoutes;
use App\Http\Routes\Setup\ApiRoutes as ApiSetupRoutes;
use App\Http\Routes\SetupRoutes;
use App\Http\Routes\SignupRoutes;
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
    protected $namespace = 'App\Http\Controllers';

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
        $router->model('component', 'App\Models\Component');
        $router->model('component_group', 'App\Models\ComponentGroup');
        $router->model('incident', 'App\Models\Incident');
        $router->model('incident_template', 'App\Models\IncidentTemplate');
        $router->model('incident_update', 'App\Models\IncidentUpdate');
        $router->model('metric', 'App\Models\Metric');
        $router->model('metric_point', 'App\Models\MetricPoint');
        $router->model('schedule', 'App\Models\Schedule');
        $router->model('setting', 'App\Models\Setting');
        $router->model('subscriber', 'App\Models\Subscriber');
        $router->model('subscription', 'App\Models\Subscription');
        $router->model('tag', 'App\Models\Tag');
        $router->model('user', 'App\Models\User');
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

                $routes = $this->app->make("App\\Http\\Routes${class}");

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
            $middleware[] = Authenticate::class;
            $middleware[] = RemoteUserAuthenticate::class;
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
