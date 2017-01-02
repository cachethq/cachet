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
 * This is the sqlite repository class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SqliteRepository extends AbstractMetricRepository implements MetricInterface
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
        $points = DB::select("SELECT strftime('%H:%M', {$this->getMetricPointsTable()}.`created_at`) AS `key`, {$queryType} FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id WHERE {$this->getMetricsTable()}.id = :metricId AND {$this->getMetricPointsTable()}.`created_at` >= datetime('now', '-{$minutes} minutes') GROUP BY strftime('%H', {$this->getMetricPointsTable()}.`created_at`), strftime('%M', {$this->getMetricPointsTable()}.`created_at`) ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
            'metricId' => $metric->id,
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
        $points = DB::select("SELECT strftime('%H:00', {$this->getMetricPointsTable()}.`created_at`) AS `key`, {$queryType} FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id WHERE {$this->getMetricsTable()}.id = :metricId AND {$this->getMetricPointsTable()}.`created_at` >= datetime('now', '-{$hour} hours') GROUP BY strftime('%H', {$this->getMetricPointsTable()}.`created_at`) ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
            'metricId' => $metric->id,
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
        $points = DB::select("SELECT strftime('%Y-%m-%d', {$this->getMetricPointsTable()}.`created_at`) AS `key`, {$queryType} FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id WHERE {$this->getMetricsTable()}.id = :metricId AND {$this->getMetricPointsTable()}.`created_at` >= datetime('now', '-{$day} days') GROUP BY DATE({$this->getMetricPointsTable()}.`created_at`) ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
            'metricId' => $metric->id,
        ]);

        return $this->mapResults($metric, $points);
    }
}
