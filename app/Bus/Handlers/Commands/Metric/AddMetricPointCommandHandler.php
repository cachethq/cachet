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

use CachetHQ\Cachet\Bus\Commands\Metric\AddMetricPointCommand;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Bus\Events\Metric\MetricPointWasAddedEvent;
use CachetHQ\Cachet\Models\MetricPoint;

class AddMetricPointCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new add metric point command handler instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(DateFactory $dates)
    {
        $this->dates = $dates;
    }

    /**
     * Handle the add metric point command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\AddMetricPointCommand $command
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function handle(AddMetricPointCommand $command)
    {
        $metric = $command->metric;
        $createdAt = $command->created_at;

        $data = [
            'metric_id' => $metric->id,
            'value'     => $command->value,
        ];

        if ($createdAt) {
            $data['created_at'] = $this->dates->create('U', $createdAt)->format('Y-m-d H:i:s');
        }

        $metricPoint = MetricPoint::create($data);

        event(new MetricPointWasAddedEvent($metricPoint));

        return $metricPoint;
    }
}
