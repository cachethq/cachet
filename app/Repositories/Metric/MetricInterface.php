<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repositories\Metric;

use App\Models\Metric;

/**
 * This is the metric interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface MetricInterface
{
    /**
     * Returns metrics since given minutes.
     *
     * @param \App\Models\Metric $metric
     * @param int                $minutes
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceMinutes(Metric $metric, $minutes);

    /**
     * Returns metrics since given hour.
     *
     * @param \App\Models\Metric $metric
     * @param int                $hour
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceHour(Metric $metric, $hour);

    /**
     * Returns metrics since given day.
     *
     * @param \App\Models\Metric $metric
     * @param int                $day
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPointsSinceDay(Metric $metric, $day);
}
