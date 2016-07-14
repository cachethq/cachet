<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

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
        $router->model('component_tag', 'CachetHQ\Cachet\Models\ComponentTag');
        $router->model('incident', 'CachetHQ\Cachet\Models\Incident');
        $router->model('incident_template', 'CachetHQ\Cachet\Models\IncidentTemplate');
        $router->model('metric', 'CachetHQ\Cachet\Models\Metric');
        $router->model('metric_point', 'CachetHQ\Cachet\Models\MetricPoint');
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
        $router->group(['namespace' => $this->namespace], function (Router $router) {
            foreach (glob(app_path('Http//Routes').'/*.php') as $file) {
                $this->app->make('CachetHQ\\Cachet\\Http\\Routes\\'.basename($file, '.php'))->map($router);
            }
        });
    }
}
