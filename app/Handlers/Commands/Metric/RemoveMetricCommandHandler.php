<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\Metric;

use CachetHQ\Cachet\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Events\Metric\MetricWasRemovedEvent;
use CachetHQ\Cachet\Models\Metric;

class RemoveMetricCommandHandler
{
    /**
     * Handle the remove metric command.
     *
     * @param \CachetHQ\Cachet\Commands\Metric\RemoveMetricCommand $command
     *
     * @return void
     */
    public function handle(RemoveMetricCommand $command)
    {
        $metric = $command->metric;

        event(new MetricWasRemovedEvent($metric));

        $metric->delete();
    }
}
