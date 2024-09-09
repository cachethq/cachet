<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Metric;

use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Bus\Events\Metric\MetricWasRemovedEvent;
use CachetHQ\Cachet\Models\Metric;
use Illuminate\Contracts\Auth\Guard;

class RemoveMetricCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new remove metric command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle the remove metric command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricCommand $command
     *
     * @return void
     */
    public function handle(RemoveMetricCommand $command)
    {
        $metric = $command->metric;

        event(new MetricWasRemovedEvent($this->auth->user(), $metric));

        $metric->delete();
    }
}
