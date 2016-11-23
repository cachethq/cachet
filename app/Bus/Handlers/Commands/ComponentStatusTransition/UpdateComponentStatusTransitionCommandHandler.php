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

use CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\UpdateComponentStatusTransitionCommand;

/**
 * This is the component status transition update command handler.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class UpdateComponentStatusTransitionCommandHandler
{
    /**
     * Handle the update status transition command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\UpdateComponentStatusTransitionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\ComponentStatusTransition
     */
    public function handle(UpdateComponentStatusTransitionCommand $command)
    {
        $componentStatusTransition = $command->componentStatusTransition;

        $componentStatusTransition->update($this->filter($command));

        return $componentStatusTransition;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\UpdateComponentStatusTransitionCommand $command
     *
     * @return array
     */
    protected function filter(UpdateComponentStatusTransitionCommand $command)
    {
        $params = [
            'component_id' => $command->component_id,
            'status'       => $command->status,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
