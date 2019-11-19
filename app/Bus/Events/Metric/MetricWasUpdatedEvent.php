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
use App\Models\Metric;
use App\Models\User;

final class MetricWasUpdatedEvent implements ActionInterface, MetricEventInterface
{
    /**
     * The user who update the metric.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The metric that was updated.
     *
     * @var \App\Models\MetricPoint
     */
    public $metric;

    /**
     * Create a new metric was updated event instance.
     *
     * @param \App\Models\User   $user
     * @param \App\Models\Metric $metric
     *
     * @return void
     */
    public function __construct(User $user, Metric $metric)
    {
        $this->user = $user;
        $this->metric = $metric;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Metric was updated.';
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
