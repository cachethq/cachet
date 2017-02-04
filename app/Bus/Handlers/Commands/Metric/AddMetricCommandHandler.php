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

use CachetHQ\Cachet\Bus\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Bus\Events\Metric\MetricWasAddedEvent;
use CachetHQ\Cachet\Models\Metric;
use Illuminate\Contracts\Auth\Guard;

class AddMetricCommandHandler
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
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\AddMetricCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function handle(AddMetricCommand $command)
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

        event(new MetricWasAddedEvent($this->auth->user(), $metric));

        return $metric;
    }
}
