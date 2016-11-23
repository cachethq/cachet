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

use CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\UpdateGroupStatusTransitionCommand;

/**
 * This is the component group status transition update command handler.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class UpdateGroupStatusTransitionCommandHandler
{
    /**
     * Handle the update status transition command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\UpdateGroupStatusTransitionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\GroupStatusTransition
     */
    public function handle(UpdateGroupStatusTransitionCommand $command)
    {
        $groupStatusTransition = $command->groupStatusTransition;

        $groupStatusTransition->update($this->filter($command));

        return $groupStatusTransition;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\UpdateGroupStatusTransitionCommand $command
     *
     * @return array
     */
    protected function filter(UpdateGroupStatusTransitionCommand $command)
    {
        $params = [
            'component_group_id'   => $command->component_group_id,
            'status'               => $command->status,
            'offending_components' => $command->offending_components,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
