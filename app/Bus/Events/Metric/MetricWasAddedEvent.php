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

final class MetricWasAddedEvent implements ActionInterface, MetricEventInterface
{
    /**
     * The user who added the metric.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The metric that was added.
     *
     * @var \CachetHQ\Cachet\Models\Metric
     */
    public $metric;

    /**
     * Create a new metric was added event instance.
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
        return 'Metric was added.';
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
