<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events\Metric;

use CachetHQ\Cachet\Models\MetricPoint;

class MetricPointWasUpdatedEvent implements MetricEventInterface
{
    /**
     * The metric point that was updated.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $point;

    /**
     * Create a new metric point was updated event instance.
     *
     * @param \CachetHQ\Cachet\Models\MetricPoint $point
     *
     * @return void
     */
    public function __construct(MetricPoint $point)
    {
        $this->point = $point;
    }
}
