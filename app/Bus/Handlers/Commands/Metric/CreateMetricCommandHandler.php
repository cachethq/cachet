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

use App\Bus\Commands\Metric\CreateMetricCommand;
use App\Bus\Events\Metric\MetricWasCreatedEvent;
use App\Models\Metric;
use Illuminate\Contracts\Auth\Guard;

class CreateMetricCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new add metric command handler instance.
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
     * Handle the add metric command.
     *
     * @param \App\Bus\Commands\Metric\CreateMetricCommand $command
     *
     * @return \App\Models\Metric
     */
    public function handle(CreateMetricCommand $command)
    {
        $metric = Metric::create([
            'name'          => $command->name,
            'suffix'        => $command->suffix,
            'description'   => $command->description,
            'default_value' => $command->default_value,
            'calc_type'     => $command->calc_type,
            'display_chart' => $command->display_chart,
            'places'        => $command->places,
            'default_view'  => $command->default_view,
            'threshold'     => $command->threshold,
            'order'         => $command->order,
            'visible'       => $command->visible,
        ]);

        event(new MetricWasCreatedEvent($this->auth->user(), $metric));

        return $metric;
    }
}
