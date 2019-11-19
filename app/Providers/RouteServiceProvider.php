<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Providers;

use App\Http\Middleware\Authenticate;
use App\Http\Routes\ApiSystemRoutes;
use App\Http\Routes\AuthRoutes;
use App\Http\Routes\Setup\ApiRoutes as ApiSetupRoutes;
use App\Http\Routes\SetupRoutes;
use App\Http\Routes\SignupRoutes;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->as('core::')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
