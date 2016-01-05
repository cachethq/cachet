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

use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Bus\Events\Metric\MetricPointWasRemovedEvent;
use CachetHQ\Cachet\Models\Metric;

class RemoveMetricPointCommandHandler
{
    /**
     * Handle the remove metric point command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand $command
     *
     * @return void
     */
    public function handle(RemoveMetricPointCommand $command)
    {
        $metricPoint = $command->metricPoint;

        event(new MetricPointWasRemovedEvent($metricPoint));

        $metricPoint->delete();
    }
}
