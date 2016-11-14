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
use CachetHQ\Cachet\Repositories\Metric\MySqlRepository;
use CachetHQ\Cachet\Repositories\Metric\PgSqlRepository;
use CachetHQ\Cachet\Repositories\Metric\SqliteRepository;
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

            switch ($config->get('database.default')) {
                case 'mysql': $repository = new MySqlRepository($config); break;
                case 'pgsql': $repository = new PgSqlRepository($config); break;
                case 'sqlite': $repository = new SqliteRepository($config); break;
            }

            $dates = $app->make(DateFactory::class);

            return new MetricRepository($repository, $dates);
        });
    }
}
