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
        $points = DB::select("SELECT to_char(metric_points.created_at, 'HH24:MI') AS key, {$queryType} FROM {$this->getTableName()} INNER JOIN metric_points ON metrics.id = metric_points.metric_id WHERE metrics.id = :metricId AND metric_points.created_at >= (NOW() - INTERVAL '{$minutes}' MINUTE) GROUP BY to_char(metric_points.created_at, 'HH24:MI') ORDER BY to_char(metric_points.created_at, 'HH24:MI')", [
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
        $points = DB::select("SELECT to_char(metric_points.created_at, 'HH24:00') AS key, {$queryType} FROM {$this->getTableName()} INNER JOIN metric_points ON metrics.id = metric_points.metric_id WHERE metrics.id = :metricId AND metric_points.created_at >= (NOW() - INTERVAL '{$hour}' HOUR) GROUP BY to_char(metric_points.created_at, 'HH24:00') ORDER BY to_char(metric_points.created_at, 'HH24:00')", [
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
        $points = DB::select("SELECT DATE(metric_points.created_at) AS key, {$queryType} FROM {$this->getTableName()} INNER JOIN metric_points ON metrics.id = metric_points.metric_id WHERE metrics.id = :metricId AND metric_points.created_at >= (DATE(NOW()) - INTERVAL '{$day}' DAY) GROUP BY DATE(metric_points.created_at) ORDER BY DATE(metric_points.created_at)", [
            'metricId' => $metric->id,
        ]);

        return $this->mapResults($metric, $points);
    }
}
