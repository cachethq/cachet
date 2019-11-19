<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\Metric;

use App\Bus\Events\ActionInterface;
use App\Models\MetricPoint;
use App\Models\User;

final class MetricPointWasUpdatedEvent implements ActionInterface, MetricEventInterface
{
    /**
     * The user who updated the metric point.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The metric point that was updated.
     *
     * @var \App\Models\MetricPoint
     */
    public $metricPoint;

    /**
     * Create a new metric point was updated event instance.
     *
     * @param \App\Models\User        $user
     * @param \App\Models\MetricPoint $metricPoint
     *
     * @return void
     */
    public function __construct(User $user, MetricPoint $metricPoint)
    {
        $this->user = $user;
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

    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction()
    {
        return [
            'user'        => $this->user,
            'description' => (string) $this,
        ];
    }
}
