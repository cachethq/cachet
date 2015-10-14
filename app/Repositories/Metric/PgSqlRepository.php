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

use CachetHQ\Cachet\Facades\Setting as SettingFacade;
use CachetHQ\Cachet\Models\Metric;
use DateInterval;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;

class PgSqlRepository implements MetricInterface
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
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return int
     */
    public function getPointsByHour(Metric $metric, $hour)
    {
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $dateTime->sub(new DateInterval('PT'.$hour.'H'));
        $hourInterval = $dateTime->format('YmdH');

        // Default metrics calculations.
        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'sum(metric_points.value)';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'avg(metric_points.value)';
        } else {
            $queryType = 'sum(metric_points.value)';
        }

        $query = DB::select("select {$queryType} as aggregate FROM metrics JOIN metric_points ON metric_points.metric_id = metrics.id WHERE metric_points.metric_id = :metric_id AND to_char(metric_points.created_at, 'YYYYMMDDHH24') = :timestamp GROUP BY to_char(metric_points.created_at, 'H')", [
            'metric_id' => $metric->id,
            'timestamp' => $hourInterval,
        ]);

        if (isset($query[0])) {
            $value = $query[0]->aggregate;
        } else {
            $value = 0;
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
        $dateTime = (new Date())->setTimezone($this->dateTimeZone);
        $dateTime->sub(new DateInterval('P'.$day.'D'));

        $points = $metric->points()
                    ->whereRaw('created_at BETWEEN (created_at - interval \'1 week\') AND now()')
                    ->whereRaw('to_char(created_at, \'YYYYMMDD\') = \''.$dateTime->format('Ymd').'\'')
                    ->groupBy(DB::raw('to_char(created_at, \'YYYYMMDD\')'));

        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $value = $points->sum('value');
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $value = $points->avg('value');
        }

        if ($value === 0 && $metric->default_value != $value) {
            return $metric->default_value;
        }

        return round($value, $metric->places);
    }
}
