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

use CachetHQ\Cachet\Models\Metric;

final class MetricWasAddedEvent implements MetricEventInterface
{
    /**
     * The metric that was added.
     *
     * @var \CachetHQ\Cachet\Models\Metric
     */
    public $metric;

    /**
     * Create a new metric was added event instance.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return void
     */
    public function __construct(Metric $metric)
    {
        $this->metric = $metric;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Metric was added.';
    }
}
