<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repositories\Metric;

use App\Integrations\Contracts\System;
use App\Models\Metric;
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
    protected function getMetricsTable()
    {
        $prefix = app(System::class)->getTablePrefix();

        return $prefix.'metrics';
    }

    /**
     * Get the metric points table name.
     *
     * @return string
     */
    protected function getMetricPointsTable()
    {
        $prefix = app(System::class)->getTablePrefix();

        return $prefix.'metric_points';
    }

    /**
     * Return the query type.
     *
     * @param \App\Models\Metric $metric
     *
     * @return string
     */
    protected function getQueryType(Metric $metric)
    {
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            return "sum({$this->getMetricPointsTable()}.value * {$this->getMetricPointsTable()}.counter) AS value";
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            return "avg({$this->getMetricPointsTable()}.value) AS value";
        } else {
            return "sum({$this->getMetricPointsTable()}.value * {$this->getMetricPointsTable()}.counter) AS value";
        }
    }

    /**
     * Map the result set.
     *
     * @param \App\Models\Metric $metric
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

            if ($point->value === 0 && $metric->default_value != $point->value) {
                $point->value = $metric->default_value;
            }

            $point->value = round($point->value, $metric->places);

            return $point;
        });
    }
}
