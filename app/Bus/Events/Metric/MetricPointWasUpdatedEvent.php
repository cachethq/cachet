<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Metric;

use CachetHQ\Cachet\Models\MetricPoint;

final class MetricPointWasUpdatedEvent implements MetricEventInterface
{
    /**
     * The metric point that was updated.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $metricPoint;

    /**
     * Create a new metric point was updated event instance.
     *
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return void
     */
    public function __construct(MetricPoint $metricPoint)
    {
        $this->metricPoint = $metricPoint;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Metric Point was updated.';
    }
}
