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
use DateInterval;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;

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
        $points = DB::select("SELECT strftime('%H:%M', metric_points.`created_at`) AS `key`, {$queryType} FROM {$this->getTableName()} INNER JOIN metric_points ON metrics.id = metric_points.metric_id WHERE metrics.id = :metricId AND metric_points.`created_at` >= datetime('now', '-{$minutes} minutes') GROUP BY strftime('%H', metric_points.`created_at`), strftime('%M', metric_points.`created_at`) ORDER BY metric_points.`created_at`", [
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
        $points = DB::select("SELECT strftime('%H:00', metric_points.`created_at`) AS `key`, {$queryType} FROM {$this->getTableName()} INNER JOIN metric_points ON metrics.id = metric_points.metric_id WHERE metrics.id = :metricId AND metric_points.`created_at` >= datetime('now', '-{$hour} hours') GROUP BY strftime('%H', metric_points.`created_at`) ORDER BY metric_points.`created_at`", [
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
        $points = DB::select("SELECT strftime('%Y-%m-%d', metric_points.`created_at`) AS `key`, {$queryType} FROM {$this->getTableName()} INNER JOIN metric_points ON metrics.id = metric_points.metric_id WHERE metrics.id = :metricId AND metric_points.`created_at` >= datetime('now', '-{$day} days') GROUP BY DATE(metric_points.`created_at`) ORDER BY metric_points.`created_at`", [
            'metricId' => $metric->id,
        ]);

        return $this->mapResults($metric, $points);
    }
}
