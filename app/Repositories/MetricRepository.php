<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories;

use CachetHQ\Cachet\Facades\Setting as SettingFacade;
use CachetHQ\Cachet\Models\Metric;
use DateInterval;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;

class MetricRepository
{
    /**
     * The timezone the status page is showing in.
     *
     * @var string
     */
    protected $dateTimeZone;

    /**
     * Creates a new instance of the metric repository.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dateTimeZone = SettingFacade::get('app_timezone');
    }

    /**
     * Returns all points as an array, by x hours.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hours
     *
     * @return array
     */
    public function listPointsToday(Metric $metric, $hours = 12)
    {
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $points = [];

        $pointKey = $dateTime->format('H:00');
        for ($i = 0; $i <= $hours; $i++) {
            $points[$pointKey] = $this->getPointsByHour($metric, $i + 1);
            $pointKey = $dateTime->sub(new DateInterval('PT1H'))->format('H:00');
        }

        return array_reverse($points);
    }

    /**
     * Returns all points as an array, in the last week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return array
     */
    public function listPointsForWeek(Metric $metric)
    {
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $points = [];

        $pointKey = $dateTime->format('jS M');
        for ($i = 0; $i <= 7; $i++) {
            $points[$pointKey] = $this->getPointsForDayInWeek($metric, $i);
            $pointKey = $dateTime->sub(new DateInterval('P1D'))->format('D jS M');
        }

        return array_reverse($points);
    }

    /**
     * Returns all points as an array, in the last month.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return array
     */
    public function listPointsForMonth(Metric $metric)
    {
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $daysInMonth = $dateTime->format('t');
        $points = [];

        $pointKey = $dateTime->format('jS M');
        for ($i = 0; $i <= $daysInMonth; $i++) {
            $points[$pointKey] = $this->getPointsForDayInWeek($metric, $i);
            $pointKey = $dateTime->sub(new DateInterval('P1D'))->format('jS M');
        }

        return array_reverse($points);
    }

    /**
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return int
     */
    protected function getPointsByHour(Metric $metric, $hour)
    {
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $dateTime->sub(new DateInterval('PT'.$hour.'H'));
        $hourInterval = $dateTime->format('YmdH');

        if (Config::get('database.default') === 'mysql') {
            $points = $metric->points()
                        ->whereRaw('DATE_FORMAT(created_at, "%Y%m%d%H") = '.$hourInterval)
                        ->groupBy(DB::raw('HOUR(created_at)'));

            if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
                $value = $points->sum('value');
            } elseif ($metric->calc_type == Metric::CALC_AVG) {
                $value = $points->avg('value');
            }
        } else {
            // Default metrics calculations.
            if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
                $queryType = 'sum(metric_points.value)';
            } elseif ($metric->calc_type == Metric::CALC_AVG) {
                $queryType = 'avg(metric_points.value)';
            } else {
                $queryType = 'sum(metric_points.value)';
            }

            $query = DB::select("select {$queryType} as aggregate FROM metrics JOIN metric_points ON metric_points.metric_id = metrics.id WHERE metric_points.metric_id = {$metric->id} AND to_char(metric_points.created_at, 'YYYYMMDDHH24') = :timestamp GROUP BY to_char(metric_points.created_at, 'H')", [
                'timestamp' => $hourInterval,
            ]);

            if (isset($query[0])) {
                $value = $query[0]->aggregate;
            } else {
                $value = 0;
            }
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
    protected function getPointsForDayInWeek(Metric $metric, $day)
    {
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $dateTime->sub(new DateInterval('P'.$day.'D'));

        if (Config::get('database.default') === 'mysql') {
            $points = $metric->points()
                        ->whereRaw('created_at BETWEEN DATE_SUB(created_at, INTERVAL 1 WEEK) AND NOW()')
                        ->whereRaw('DATE_FORMAT(created_at, "%Y%m%d") = '.$dateTime->format('Ymd'))
                        ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y%m%d")'));

            if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
                $value = $points->sum('value');
            } elseif ($metric->calc_type == Metric::CALC_AVG) {
                $value = $points->avg('value');
            }
        } else {
            // Default metrics calculations.
            if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
                $queryType = 'sum(metric_points.value)';
            } elseif ($metric->calc_type == Metric::CALC_AVG) {
                $queryType = 'avg(metric_points.value)';
            } else {
                $queryType = 'sum(metric_points.value)';
            }

            $query = DB::select("select {$queryType} as aggregate FROM metrics JOIN metric_points ON metric_points.metric_id = metrics.id WHERE metric_points.metric_id = {$metric->id} AND to_char(metric_points.created_at, 'YYYYMMDD') = :timestamp GROUP BY to_char(metric_points.created_at, 'YYYYMMDD')", [
                'timestamp' => $hourInterval,
            ]);

            if (isset($query[0])) {
                $value = $query[0]->aggregate;
            } else {
                $value = 0;
            }
        }

        if ($value === 0 && $metric->default_value != $value) {
            return $metric->default_value;
        }

        return round($value, $metric->places);
    }
}
