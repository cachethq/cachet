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

class PgSqlRepository implements MetricInterface
{
    /**
     * Returns metrics for the last hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     * @param int                            $minute
     *
     * @return int
     */
    public function getPointsLastHour(Metric $metric, $hour, $minute)
    {
        $dateTime = (new Date())->sub(new DateInterval('PT'.$hour.'H'))->sub(new DateInterval('PT'.$minute.'M'));

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'sum(metric_points.value * metric_points.counter)';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'avg(metric_points.value * metric_points.counter)';
        } else {
            $queryType = 'sum(metric_points.value * metric_points.counter)';
        }

        $value = 0;
        $query = DB::select("select {$queryType} as value FROM metrics JOIN metric_points ON metric_points.metric_id = metrics.id WHERE metrics.id = :metricId AND to_char(metric_points.created_at, 'YYYYMMDDHH24MI') = :timeInterval GROUP BY to_char(metric_points.created_at, 'HHMI')", [
            'metricId'     => $metric->id,
            'timeInterval' => $dateTime->format('YmdHi'),
        ]);

        if (isset($query[0])) {
            $value = $query[0]->value;
        }

        if ($value === 0 && $metric->default_value != $value) {
            return $metric->default_value;
        }

        return round($value, $metric->places);
    }

    /**
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return int
     */
    public function getPointsByHour(Metric $metric, $hour)
    {
        $dateTime = (new Date())->sub(new DateInterval('PT'.$hour.'H'));

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'sum(metric_points.value * metric_points.counter)';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'avg(metric_points.value * metric_points.counter)';
        } else {
            $queryType = 'sum(metric_points.value * metric_points.counter)';
        }

        $value = 0;
        $query = DB::select("select {$queryType} as value FROM metrics JOIN metric_points ON metric_points.metric_id = metrics.id WHERE metric_points.metric_id = :metricId AND to_char(metric_points.created_at, 'YYYYMMDDHH24') = :timeInterval GROUP BY to_char(metric_points.created_at, 'H')", [
            'metricId'     => $metric->id,
            'timeInterval' => $dateTime->format('YmdH'),
        ]);

        if (isset($query[0])) {
            $value = $query[0]->value;
        }

        if ($value === 0 && $metric->default_value != $value) {
            return $metric->default_value;
        }

        return round($value, $metric->places);
    }

    /**
     * Returns metrics for the week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return int
     */
    public function getPointsForDayInWeek(Metric $metric, $day)
    {
        $dateTime = (new Date())->sub(new DateInterval('P'.$day.'D'));

        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'sum(mp.value * mp.counter) AS value';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'avg(mp.value * mp.counter) AS value';
        }

        $value = 0;
        $points = DB::select("SELECT {$queryType} FROM metrics m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND mp.created_at BETWEEN (mp.created_at - interval '1 week') AND (now() + interval '1 day') AND to_char(mp.created_at, 'YYYYMMDD') = :timeInterval GROUP BY to_char(mp.created_at, 'YYYYMMDD')", [
            'metricId'     => $metric->id,
            'timeInterval' => $dateTime->format('Ymd'),
        ]);

        if (isset($points[0]) && !($value = $points[0]->value)) {
            $value = 0;
        }

        if ($value === 0 && $metric->default_value != $value) {
            return $metric->default_value;
        }

        return round($value, $metric->places);
    }
}
