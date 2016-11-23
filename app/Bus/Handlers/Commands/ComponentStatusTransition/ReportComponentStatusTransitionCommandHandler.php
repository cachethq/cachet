<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\ComponentStatusTransition;

use CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\ReportComponentStatusTransitionCommand;
use CachetHQ\Cachet\Models\ComponentStatusTransition;

/**
 * This is the report status transition command handler.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class ReportComponentStatusTransitionCommandHandler
{
    /**
     * Handle the report status transition command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\ReportComponentStatusTransitionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\ComponentStatusTransition
     */
    public function handle(ReportComponentStatusTransitionCommand $command)
    {
        $data = [
            'component_id' => $command->component_id,
            'status'       => $command->status,
        ];

        // Create the status transition.
        $componentStatusTransition = ComponentStatusTransition::create($data);

        return $componentStatusTransition;
    }
}
