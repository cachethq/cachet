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
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * This is the mysql metric class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MySql extends AbstractMetricRepository implements MetricInterface
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
        $points = Collection::make(DB::select("SELECT DATE_FORMAT(mp.`created_at`, '%H:%i') AS `key`, {$queryType} FROM {$this->getTableName()} m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND mp.`created_at` >= DATE_SUB(NOW(), INTERVAL :minutes MINUTE) GROUP BY HOUR(mp.`created_at`), MINUTE(mp.`created_at`) ORDER BY mp.`created_at`", [
            'metricId' => $metric->id,
            'minutes'  => $minutes,
        ]));

        return $this->mapResults($metric, $points);
    }

    /**
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceHour(Metric $metric, $hour)
    {
        $queryType = $this->getQueryType($metric);
        $points = Collection::make(DB::select("SELECT DATE_FORMAT(mp.`created_at`, '%H:00') AS `key`, {$queryType} FROM {$this->getTableName()} m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND mp.`created_at` >= DATE_SUB(NOW(), INTERVAL :hour HOUR) GROUP BY HOUR(mp.`created_at`) ORDER BY mp.`created_at`", [
            'metricId' => $metric->id,
            'hour'     => $hour,
        ]));

        return $this->mapResults($metric, $points);
    }

    /**
     * Returns metrics for the week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceDay(Metric $metric, $day)
    {
        $queryType = $this->getQueryType($metric);
        $points = Collection::make(DB::select("SELECT DATE_FORMAT(mp.`created_at`, '%Y-%m-%d') AS `key`, {$queryType} FROM {$this->getTableName()} m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND mp.`created_at` >= DATE_SUB(NOW(), INTERVAL :day DAY) GROUP BY DATE_FORMAT(mp.`created_at`) ORDER BY mp.`created_at`", [
            'metricId' => $metric->id,
            'day'      => $day,
        ]));

        return $this->mapResults($metric, $points);
    }
}
