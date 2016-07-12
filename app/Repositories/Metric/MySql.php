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
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;

/**
 * This is the mysql metric class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Mysql extends AbstractMetricRepository implements MetricInterface
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

        return $points->map(function ($point) use ($metric) {
            if (!$point->value) {
                $point->value = $metric->default_value;
            }

            if ($point->value === 0 && $metric->default_value != $value) {
                $point->value = $metric->default_value;
            }

            $point->value = round($point->value, $metric->places);

            return $point;
        });
    }

    /**
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return array
     */
    public function getPointsByHour(Metric $metric, $hour)
    {
        $queryType = $this->getQueryType($metric);

        $value = 0;

        $points = DB::select("SELECT {$queryType} FROM {$this->getTableName()} m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND DATE_FORMAT(mp.`created_at`, '%Y%m%d%H') = :hourInterval GROUP BY HOUR(mp.`created_at`)", [
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
     * @return array
     */
    public function getPointsForDayInWeek(Metric $metric, $day)
    {
        $dateTime = (new Date())->sub(new DateInterval('P'.$day.'D'));

        $queryType = $this->getQueryType($metric);

        $value = 0;

        $points = DB::select("SELECT {$queryType} FROM {$this->getTableName()} m INNER JOIN metric_points mp ON m.id = mp.metric_id WHERE m.id = :metricId AND mp.`created_at` BETWEEN DATE_SUB(mp.`created_at`, INTERVAL 1 WEEK) AND DATE_ADD(NOW(), INTERVAL 1 DAY) AND DATE_FORMAT(mp.`created_at`, '%Y%m%d') = :timeInterval GROUP BY DATE_FORMAT(mp.`created_at`, '%Y%m%d')", [
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
