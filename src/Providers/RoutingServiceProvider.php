<?php

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerFilters();
        $this->registerBindings();
        $this->registerRoutes();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register filters.
     *
     * @return void
     */
    protected function registerFilters()
    {
        // Laravel's before filters
        $this->app->router->filter('auth', 'CachetHQ\Cachet\Http\Before\AuthFilter');
        $this->app->router->filter('guest', 'CachetHQ\Cachet\Http\Before\GuestFilter');
        $this->app->router->filter('csrf', 'CachetHQ\Cachet\Http\Before\CsrfFilter');

        // Cachet's before filters
        $this->app->router->filter('admin', 'CachetHQ\Cachet\Http\Before\AdminFilter');
        $this->app->router->filter('is_setup', 'CachetHQ\Cachet\Http\Before\IsSetupFilter');
        $this->app->router->filter('has_setting', 'CachetHQ\Cachet\Http\Before\HasSettingFilter');
        $this->app->router->filter('login_throttling', 'CachetHQ\Cachet\Http\Before\LoginThrottlingFilter');

        // Cachet's after filters
        $this->app->router->filter('allowed_domains', 'CachetHQ\Cachet\Http\After\AllowedDomainsFilter');
        $this->app->router->filter('cors', 'CachetHQ\Cachet\Http\After\CorsFilter');
    }

    /**
     * Register model bindings.
     *
     * @return void
     */
    protected function registerBindings()
    {
        $this->app->router->model('component', 'CachetHQ\Cachet\Models\Component');
        $this->app->router->model('component_group', 'CachetHQ\Cachet\Models\ComponentGroup');
        $this->app->router->model('incident', 'CachetHQ\Cachet\Models\Incident');
        $this->app->router->model('incident_template', 'CachetHQ\Cachet\Models\IncidentTemplate');
        $this->app->router->model('metric', 'CachetHQ\Cachet\Models\Metric');
        $this->app->router->model('metric_point', 'CachetHQ\Cachet\Models\MetricPoint');
        $this->app->router->model('setting', 'CachetHQ\Cachet\Models\Setting');
        $this->app->router->model('user', 'CachetHQ\Cachet\Models\User');
    }

    /**
     * Register all route files.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        $files = glob(app_path('routes').'/*.php');

        foreach ($files as $file) {
            require $file;
        }
    }
}
