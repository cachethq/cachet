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
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

/**
 * This is the repository service provider.
 *
 * @author James Brooks <james@alt-three.com>
 */
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
        $this->app->singleton(MetricRepository::class, function (Container $app) {
            $config = $app->make(ConfigRepository::class);
            $driver = $config->get('database.default');

            if ($driver == 'mysql') {
                $repository = new MetricMySqlRepository($config);
            } elseif ($driver == 'pgsql') {
                $repository = new MetricPgSqlRepository($config);
            } elseif ($driver == 'sqlite') {
                $repository = new MetricSqliteRepository($config);
            }

            $dates = $app->make(DateFactory::class);

            return new MetricRepository($repository, $dates);
        });
    }
}
