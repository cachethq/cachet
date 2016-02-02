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

use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use CachetHQ\Cachet\Repositories\Metric\MySqlRepository as MetricMySqlRepository;
use CachetHQ\Cachet\Repositories\Metric\PgSqlRepository as MetricPgSqlRepository;
use CachetHQ\Cachet\Repositories\Metric\SqliteRepository as MetricSqliteRepository;
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
        $this->registerMetricRepository();
    }

    /**
     * Register the metric repository.
     *
     * @return void
     */
    protected function registerMetricRepository()
    {
        $this->app->singleton('cachet.metricrepository', function ($app) {
            $dbDriver = $app['config']->get('database.default');

            if ($dbDriver == 'mysql') {
                $repository = new MetricMySqlRepository();
            } elseif ($dbDriver == 'pgsql') {
                $repository = new MetricPgSqlRepository();
            } elseif ($dbDriver == 'sqlite') {
                $repository = new MetricSqliteRepository();
            }

            $dates = $app->make(DateFactory::class);

            return new MetricRepository($repository, $dates);
        });

        $this->app->alias('cachet.metricrepository', MetricRepository::class);
    }
}
