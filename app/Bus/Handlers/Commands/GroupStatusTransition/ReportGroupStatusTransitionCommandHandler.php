<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\GroupStatusTransition;

use CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\ReportGroupStatusTransitionCommand;
use CachetHQ\Cachet\Models\GroupStatusTransition;

/**
 * This is the report component group status transition command handler.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class ReportGroupStatusTransitionCommandHandler
{
    /**
     * Handle the report status transition command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\ReportGroupStatusTransitionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\ComponentStatusTransition
     */
    public function handle(ReportGroupStatusTransitionCommand $command)
    {
        $data = [
            'component_group_id'   => $command->component_group_id,
            'status'               => $command->status,
            'offending_components' => $command->offending_components,
        ];

        // Create the status transition.
        $groupStatusTransition = GroupStatusTransition::create($data);

        return $groupStatusTransition;
    }
}
