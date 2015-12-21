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

interface MetricInterface
{
    /**
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return int
     */
    public function getPointsByHour(Metric $metric, $hour);

    /**
     * Returns metrics for the week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param                                $day
     *
     * @return int
     */
    public function getPointsForDayInWeek(Metric $metric, $day);
}
