<?php

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'CachetHQ\Cachet\Repositories\Component\ComponentRepository',
            'CachetHQ\Cachet\Repositories\Component\EloquentComponentRepository'
        );
        $this->app->bind(
            'CachetHQ\Cachet\Repositories\Incident\IncidentRepository',
            'CachetHQ\Cachet\Repositories\Incident\EloquentIncidentRepository'
        );
        $this->app->bind(
            'CachetHQ\Cachet\Repositories\Metric\MetricRepository',
            'CachetHQ\Cachet\Repositories\Metric\EloquentMetricRepository'
        );
        $this->app->bind(
            'CachetHQ\Cachet\Repositories\MetricPoint\MetricPointRepository',
            'CachetHQ\Cachet\Repositories\MetricPoint\EloquentMetricPointRepository'
        );
    }
}
