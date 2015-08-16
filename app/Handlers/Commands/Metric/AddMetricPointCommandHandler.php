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

use Carbon\Carbon;
use CachetHQ\Cachet\Commands\Metric\AddMetricPointCommand;
use CachetHQ\Cachet\Events\Metric\MetricPointWasAddedEvent;
use CachetHQ\Cachet\Models\MetricPoint;

class AddMetricPointCommandHandler
{
    /**
     * Handle the add metric point command.
     *
     * @param \CachetHQ\Cachet\Commands\Metric\AddMetricPointCommand $command
     *
     * @return void
     */
    public function handle(AddMetricPointCommand $command)
    {
        $metric = $command->metric;
        $createdAt = $command->createdAt;

        $data = [
            'metric_id'  => $metric->id,
            'value'      => $command->value,
        ];

        if ($createdAt) {
            $data['created_at'] = Carbon::createFromFormat('U', $createdAt)->format('Y-m-d H:i:s');
        }

        $metricPoint = MetricPoint::create($data);

        event(new MetricPointWasAddedEvent($metricPoint));

        return $metricPoint;
    }
}
