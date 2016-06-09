<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Models\Metric;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Collection;

/**
 * This is the abstract metric repository class.
 *
 * @author Jams Brooks <james@alt-three.com>
 */
abstract class AbstractMetricRepository
{
    /**
     * The illuminate config repository.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * The name of the metrics table.
     *
     * @var string
     */
    protected $tableName;

    /**
     * Create a new abstract metric repository instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Get the metrics table name.
     *
     * @return string
     */
    protected function getTableName()
    {
        $driver = $this->config->get('database.default');
        $connection = $this->config->get('database.connections.'.$driver);
        $prefix = $connection['prefix'];

        return $prefix.'metrics';
    }

    /**
     * Return the query type.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return string
     */
    protected function getQueryType(Metric $metric)
    {
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            return 'sum(metric_points.value * metric_points.counter) AS value';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            return 'avg(metric_points.value * metric_points.counter) AS value';
        } else {
            return 'sum(metric_points.value * metric_points.counter) AS value';
        }
    }

    /**
     * Map the result set.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param array                          $results
     *
     * @return \Illuminate\Support\Collection
     */
    protected function mapResults(Metric $metric, array $results)
    {
        $results = Collection::make($results);

        return $results->map(function ($point) use ($metric) {
            if (!$point->value) {
                $point->value = $metric->default_value;
            }

            if ($point->value === 0 && $metric->default_value != $value) {
                $point->value = $metric->default_value;
            }

            $point->value = round($point->value, $metric->places);

            return $point;
        });
    }
}
