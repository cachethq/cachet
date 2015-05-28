<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
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
