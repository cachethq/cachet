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

use CachetHQ\Cachet\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Events\Metric\MetricWasAddedEvent;
use CachetHQ\Cachet\Models\Metric;

class AddMetricCommandHandler
{
    /**
     * Handle the add metric command.
     *
     * @param \CachetHQ\Cachet\Commands\Metric\AddMetricCommand $command
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
        ]);

        event(new MetricWasAddedEvent($metric));

        return $metric;
    }
}
