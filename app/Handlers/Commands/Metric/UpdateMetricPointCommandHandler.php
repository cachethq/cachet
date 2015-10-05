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

use CachetHQ\Cachet\Commands\Metric\UpdateMetricPointCommand;
use CachetHQ\Cachet\Events\Metric\MetricPointWasUpdatedEvent;
use Carbon\Carbon;

class UpdateMetricPointCommandHandler
{
    /**
     * Handle the update metric point command.
     *
     * @param \CachetHQ\Cachet\Commands\Metric\UpdateMetricPointCommand $command
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function handle(UpdateMetricPointCommand $command)
    {
        $point = $command->point;
        $metric = $command->metric;
        $createdAt = $command->created_at;

        $data = [
            'metric_id' => $metric->id,
            'value'     => $command->value,
        ];

        if ($createdAt) {
            $data['created_at'] = Carbon::createFromFormat('U', $createdAt)->format('Y-m-d H:i:s');
        }

        $point->update($data);

        event(new MetricPointWasUpdatedEvent($point));

        return $point;
    }
}
