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

use CachetHQ\Cachet\Bus\Events\ActionInterface;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\User;

final class MetricWasUpdatedEvent implements ActionInterface, MetricEventInterface
{
    /**
     * The user who update the metric.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The metric that was updated.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $metric;

    /**
     * Create a new metric was updated event instance.
     *
     * @param \CachetHQ\Cachet\Models\User   $user
     * @param \CachetHQ\Cachet\Models\Metric $metric
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
