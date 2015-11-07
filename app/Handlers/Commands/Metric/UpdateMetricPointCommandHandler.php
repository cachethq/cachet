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
use Illuminate\Contracts\Config\Repository as Config;

class UpdateMetricPointCommandHandler
{
    /**
     * The illuminate config repository instance.
     *
     * @return \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new add metric point command handler instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config;
     *
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

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
            $data['created_at'] = Carbon::createFromFormat('U', $createdAt, $this->config->get('cachet.timezone'))->format('Y-m-d H:i:s');
        }

        $point->update($data);

        event(new MetricPointWasUpdatedEvent($point));

        return $point;
    }
}
