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
use Illuminate\Support\Facades\DB;

/**
 * This is the mysql repository class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MySqlRepository extends AbstractMetricRepository implements MetricInterface
{
    /**
     * Returns metrics since given minutes.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $minutes
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceMinutes(Metric $metric, $minutes)
    {
        $queryType = $this->getQueryType($metric);
        $points = DB::select("SELECT DATE_FORMAT({$this->getMetricPointsTable()}.`created_at`, '%H:%i') AS `key`, {$queryType} FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id WHERE {$this->getMetricsTable()}.id = :metricId AND {$this->getMetricPointsTable()}.`created_at` >= DATE_SUB(NOW(), INTERVAL :minutes MINUTE) GROUP BY HOUR({$this->getMetricPointsTable()}.`created_at`), MINUTE({$this->getMetricPointsTable()}.`created_at`) ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
            'metricId' => $metric->id,
            'minutes'  => $minutes,
        ]);

        return $this->mapResults($metric, $points);
    }

    /**
     * Returns metrics since given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceHour(Metric $metric, $hour)
    {
        $queryType = $this->getQueryType($metric);
        $points = DB::select("SELECT DATE_FORMAT({$this->getMetricPointsTable()}.`created_at`, '%H:00') AS `key`, {$queryType} FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id WHERE {$this->getMetricsTable()}.id = :metricId AND {$this->getMetricPointsTable()}.`created_at` >= DATE_SUB(NOW(), INTERVAL :hour HOUR) GROUP BY HOUR({$this->getMetricPointsTable()}.`created_at`) ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
            'metricId' => $metric->id,
            'hour'     => $hour,
        ]);

        return $this->mapResults($metric, $points);
    }

    /**
     * Returns metrics since given day.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $day
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceDay(Metric $metric, $day)
    {
        $queryType = $this->getQueryType($metric);
        $points = DB::select("SELECT DATE_FORMAT({$this->getMetricPointsTable()}.`created_at`, '%Y-%m-%d') AS `key`, {$queryType} FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id WHERE {$this->getMetricsTable()}.id = :metricId AND {$this->getMetricPointsTable()}.`created_at` >= DATE_SUB(NOW(), INTERVAL :day DAY) GROUP BY DATE({$this->getMetricPointsTable()}.`created_at`) ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
            'metricId' => $metric->id,
            'day'      => $day,
        ]);

        return $this->mapResults($metric, $points);
    }
}
