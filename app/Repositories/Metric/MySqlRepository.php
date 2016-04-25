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

class MySqlRepository implements MetricInterface
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
        $timeInterval = $dateTime->format('YmdHi');

        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'SUM(mp.`value` * mp.`counter`) AS `value`';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'AVG(mp.`value` * mp.`counter`) AS `value`';
        }

        $value = 0;

        $points = DB::select("SELECT {$queryType} FROM metrics m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND DATE_FORMAT(mp.`created_at`, '%Y%m%d%H%i') = :timeInterval GROUP BY HOUR(mp.`created_at`), MINUTE(mp.`created_at`)", [
            'metricId'     => $metric->id,
            'timeInterval' => $timeInterval,
        ]);

        if (isset($points[0]) && !($value = $points[0]->value)) {
            $value = 0;
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
        $hourInterval = $dateTime->format('YmdH');

        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'SUM(mp.`value` * mp.`counter`) AS `value`';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'AVG(mp.`value` * mp.`counter`) AS `value`';
        }

        $value = 0;

        $points = DB::select("SELECT {$queryType} FROM metrics m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND DATE_FORMAT(mp.`created_at`, '%Y%m%d%H') = :hourInterval GROUP BY HOUR(mp.`created_at`)", [
            'metricId'     => $metric->id,
            'hourInterval' => $hourInterval,
        ]);

        if (isset($points[0]) && !($value = $points[0]->value)) {
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
        $dateTime = (new Date())->sub(new DateInterval('P'.$day.'D'));

        if (!isset($metric->calc_type) || $metric->calc_type == Metric::CALC_SUM) {
            $queryType = 'SUM(mp.`value` * mp.`counter`) AS `value`';
        } elseif ($metric->calc_type == Metric::CALC_AVG) {
            $queryType = 'AVG(mp.`value` * mp.`counter`) AS `value`';
        }

        $value = 0;

        $points = DB::select("SELECT {$queryType} FROM metrics m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND mp.`created_at` BETWEEN DATE_SUB(mp.`created_at`, INTERVAL 1 WEEK) AND DATE_ADD(NOW(), INTERVAL 1 DAY) AND DATE_FORMAT(mp.`created_at`, '%Y%m%d') = :timeInterval GROUP BY DATE_FORMAT(mp.`created_at`, '%Y%m%d')", [
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
