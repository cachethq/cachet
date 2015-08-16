<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Metric;

use CachetHQ\Cachet\Models\MetricPoint;

class RemoveMetricPointCommand
{
    /**
     * The metric point to remove.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $metricPoint;

    /**
     * Create a new remove metric point command instance.
     *
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return void
     */
    public function __construct(MetricPoint $metricPoint)
    {
        $this->metricPoint = $metricPoint;
    }
}
