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
 * This is the pgsql repository class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class PgSqlRepository extends AbstractMetricRepository implements MetricInterface
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
        $points = DB::select("SELECT to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:MI') AS key, {$queryType} ".
            "FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id ".
            "WHERE {$this->getMetricsTable()}.id = :metricId ".
            "AND {$this->getMetricPointsTable()}.created_at >= (NOW() - INTERVAL '{$minutes}' MINUTE) ".
            "AND {$this->getMetricPointsTable()}.created_at <= NOW() ".
            "GROUP BY to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:MI') ".
            "ORDER BY to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:MI')", [
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
        $points = DB::select("SELECT to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:00') AS key, {$queryType} ".
            "FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id ".
            "WHERE {$this->getMetricsTable()}.id = :metricId ".
            "AND {$this->getMetricPointsTable()}.created_at >= (NOW() - INTERVAL '{$hour}' HOUR) ".
            "AND {$this->getMetricPointsTable()}.created_at <= NOW() ".
            "GROUP BY to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:00') ".
            "ORDER BY to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:00')", [
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
        $points = DB::select("SELECT to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:00') AS key, {$queryType} ".
            "FROM {$this->getMetricsTable()} INNER JOIN {$this->getMetricPointsTable()} ON {$this->getMetricsTable()}.id = {$this->getMetricPointsTable()}.metric_id ".
            "WHERE {$this->getMetricsTable()}.id = :metricId ".
            "AND {$this->getMetricPointsTable()}.created_at >= (DATE(NOW()) - INTERVAL '{$day}' DAY) ".
            "AND {$this->getMetricPointsTable()}.created_at <= DATE(NOW()) ".
            "GROUP BY to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:00')".
            "ORDER BY to_char({$this->getMetricPointsTable()}.created_at, 'YYYY-MM-DD HH24:00')", [
                'metricId' => $metric->id,
            ]);

        return $this->mapResults($metric, $points);
    }
}
