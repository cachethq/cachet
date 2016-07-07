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

class SqliteRepository extends AbstractMetricRepository implements MetricInterface
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
        $query = DB::select("select {$queryType} as value FROM {$this->getTableName()} m JOIN metric_points ON metric_points.metric_id = m.id WHERE m.id = :metricId AND strftime('%Y%m%d%H%M', metric_points.created_at) = :timeInterval GROUP BY strftime('%H%M', metric_points.created_at)", [
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
        $query = DB::select("select {$queryType} as value FROM {$this->getTableName()} m JOIN metric_points ON metric_points.metric_id = m.id WHERE m.id = :metricId AND strftime('%Y%m%d%H', metric_points.created_at) = :timeInterval GROUP BY strftime('%H', metric_points.created_at)", [
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

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'sum(metric_points.value * metric_points.counter)';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'avg(metric_points.value * metric_points.counter)';
        } else {
            $queryType = 'sum(metric_points.value * metric_points.counter)';
        }

        $value = 0;
        $query = DB::select("select {$queryType} as value FROM {$this->getTableName()} m JOIN metric_points ON metric_points.metric_id = m.id WHERE m.id = :metricId AND metric_points.created_at > date('now', '-7 day') AND strftime('%Y%m%d', metric_points.created_at) = :timeInterval GROUP BY strftime('%Y%m%d', metric_points.created_at)", [
            'metricId'     => $metric->id,
            'timeInterval' => $dateTime->format('Ymd'),
        ]);

        if (isset($query[0])) {
            $value = $query[0]->value;
        }

        if ($value === 0 && $metric->default_value != $value) {
            return $metric->default_value;
        }

        return round($value, $metric->places);
    }
}
