<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Commands\Metric;

use App\Bus\Commands\Metric\CreateMetricPointCommand;
use App\Bus\Events\Metric\MetricPointWasCreatedEvent;
use App\Models\MetricPoint;
use App\Services\Dates\DateFactory;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;

class CreateMetricPointCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * The date factory instance.
     *
     * @var \App\Services\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new add metric point command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard            $auth
     * @param \App\Services\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(Guard $auth, DateFactory $dates)
    {
        $this->auth = $auth;
        $this->dates = $dates;
    }

    /**
     * Handle the add metric point command.
     *
     * @param \App\Bus\Commands\Metric\CreateMetricPointCommand $command
     *
     * @return \App\Models\MetricPoint
     */
    public function handle(CreateMetricPointCommand $command)
    {
        $metric = $command->metric;
        $createdAt = $command->created_at;

        // Do we have an existing point with the same value?
        $point = $this->findOrCreatePoint($command);

        $point->increment('counter', 1);

        event(new MetricPointWasCreatedEvent($this->auth->user(), $point));

        return $point;
    }

    /**
     * Find or create a metric point.
     *
     * @param \App\Bus\Commands\Metric\CreateMetricPointCommand $command
     *
     * @return \App\Models\MetricPoint
     */
    protected function findOrCreatePoint(CreateMetricPointCommand $command)
    {
        $buffer = Carbon::now()->subMinutes($command->metric->threshold - 1)->startOfMinute();

        if ($point = MetricPoint::where('metric_id', '=', $command->metric->id)->where('value', '=', $command->value)->where('created_at', '>=', $buffer)->first()) {
            return $point;
        }

        $data = [
            'metric_id' => $command->metric->id,
            'value'     => $command->value,
            'counter'   => 0,
        ];

        if ($command->created_at) {
            $data['created_at'] = $this->dates->create('U', $command->created_at)->format('Y-m-d H:i:s');
        }

        return MetricPoint::create($data);
    }
}
