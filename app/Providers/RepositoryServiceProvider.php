<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
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
