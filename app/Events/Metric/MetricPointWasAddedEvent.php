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

class MetricPointWasAddedEvent implements MetricEventInterface
{
    /**
     * The metric point that was added.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $metric;

    /**
     * Create a new metric point was added event instance.
     *
     * @return void
     */
    public function __construct(MetricPoint $metric)
    {
        $this->metric = $metric;
    }
}
