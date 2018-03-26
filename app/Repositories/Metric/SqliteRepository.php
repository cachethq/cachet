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
        $metricPointsTableName = $this->getMetricPointsTableName();

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = "sum($metricPointsTableName.value * $metricPointsTableName.counter)";
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = "avg($metricPointsTableName.value * $metricPointsTableName.counter)";
        } else {
            $queryType = "sum($metricPointsTableName.value * $metricPointsTableName.counter)";
        }

        $value = 0;
        $query = DB::select("select {$queryType} as value FROM {$this->getTableName()} m JOIN $metricPointsTableName ON $metricPointsTableName.metric_id = m.id WHERE m.id = :metricId AND strftime('%Y%m%d%H%M', $metricPointsTableName.created_at) = :timeInterval GROUP BY strftime('%H%M', $metricPointsTableName.created_at)", [
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
        $metricPointsTableName = $this->getMetricPointsTableName();

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = "sum($metricPointsTableName.value * $metricPointsTableName.counter)";
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = "avg($metricPointsTableName.value * $metricPointsTableName.counter)";
        } else {
            $queryType = "sum($metricPointsTableName.value * $metricPointsTableName.counter)";
        }

        $value = 0;
        $query = DB::select("select {$queryType} as value FROM {$this->getTableName()} m JOIN $metricPointsTableName ON $metricPointsTableName.metric_id = m.id WHERE m.id = :metricId AND strftime('%Y%m%d%H', $metricPointsTableName.created_at) = :timeInterval GROUP BY strftime('%H', $metricPointsTableName.created_at)", [
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
        $metricPointsTableName = $this->getMetricPointsTableName();

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = "sum($metricPointsTableName.value * $metricPointsTableName.counter)";
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = "avg($metricPointsTableName.value * $metricPointsTableName.counter)";
        } else {
            $queryType = "sum($metricPointsTableName.value * $metricPointsTableName.counter)";
        }

        $value = 0;
        $query = DB::select("select {$queryType} as value FROM {$this->getTableName()} m JOIN $metricPointsTableName ON $metricPointsTableName.metric_id = m.id WHERE m.id = :metricId AND $metricPointsTableName.created_at > date('now', '-7 day') AND strftime('%Y%m%d', $metricPointsTableName.created_at) = :timeInterval GROUP BY strftime('%Y%m%d', $metricPointsTableName.created_at)", [
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
