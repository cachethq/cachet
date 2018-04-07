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
        return $this->getPointsSince($metric, $minutes, 'minutes', '%Y-%m-%d %H:%M');
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
        return $this->getPointsSince($metric, $hour, 'hours', '%Y-%m-%d %H:00');
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
        return $this->getPointsSince($metric, $day, 'days', '%Y-%m-%d');
    }

    /**
     * Returns metrics since given day.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $time
     * @param string                         $timeUnit
     * @param string                         $timeFormat
     *
     * @return \Illuminate\Support\Collection
     */
    private function getPointsSince(Metric $metric, $time, $timeUnit, $timeFormat)
    {
        if ($metric->calc_type == Metric::CALC_PERCENTILE) {
            $points = [];
            for ($i = 0; $i <= $time; $i++) {
                $points = array_merge($points, DB::select("WITH points AS (SELECT * FROM {$this->getMetricPointsTable()} ".
                    "WHERE {$this->getMetricPointsTable()}.metric_id = :metricId ".
                    "AND strftime('{$timeFormat}', {$this->getMetricPointsTable()}.`created_at`) = strftime('{$timeFormat}', 'now', 'localtime', '-{$i} {$timeUnit}')) ".
                    "SELECT strftime('{$timeFormat}', points.`created_at`) AS `key`, points.value AS value FROM points ".
                    'ORDER BY value '.
                    'LIMIT 1 OFFSET (SELECT COUNT(*) FROM points) * 99 / 100 - 1',
                    ['metricId' => $metric->id]
                ));
            }

            return $this->mapResults($metric, $points);
        } else {
            $queryType = $this->getQueryType($metric);
            $points = DB::select("SELECT strftime('{$timeFormat}', {$this->getMetricPointsTable()}.`created_at`) AS `key`, {$queryType} ".
                "FROM {$this->getMetricPointsTable()} ".
                "WHERE {$this->getMetricPointsTable()}.metric_id = :metricId ".
                "AND {$this->getMetricPointsTable()}.`created_at` >= datetime('now', 'localtime', '-{$time} {$timeUnit}') ".
                "AND {$this->getMetricPointsTable()}.`created_at` <= datetime('now', 'localtime') ".
                "GROUP BY strftime('{$timeFormat}', {$this->getMetricPointsTable()}.`created_at`) ".
                "ORDER BY {$this->getMetricPointsTable()}.`created_at`", [
                'metricId' => $metric->id,
            ]);

            return $this->mapResults($metric, $points);
        }
    }

    /**
     * Return the percentile query.
     *
     * @return string
     */
    protected function getPercentileQuery()
    {
    }
}
