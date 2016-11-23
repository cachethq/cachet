<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Component;

use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasUpdatedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupStatusWasUpdatedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;

class UpdateComponentCommandHandler
{
    /**
     * Handle the update component command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function handle(UpdateComponentCommand $command)
    {
        $component = $command->component;
        $originalStatus = $component->status;
        $originalGroupId = $component->group_id;

        event(new ComponentStatusWasUpdatedEvent($component, $originalStatus, $command->status));

        $component->update($this->filter($command));

        event(new ComponentWasUpdatedEvent($component));

        // Trigger the event for when the component group status is updated.
        if ($originalGroupId) {
            event(new ComponentGroupStatusWasUpdatedEvent((new ComponentGroup())->find($originalGroupId)));
        }
        if ($command->group_id && $command->group_id != $originalGroupId) {
            event(new ComponentGroupStatusWasUpdatedEvent((new ComponentGroup())->find($command->group_id)));
        }

        return $component;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand $command
     *
     * @return array
     */
    protected function filter(UpdateComponentCommand $command)
    {
        $params = [
            'name'        => $command->name,
            'description' => $command->description,
            'link'        => $command->link,
            'status'      => $command->status,
            'enabled'     => $command->enabled,
            'order'       => $command->order,
            'group_id'    => $command->group_id,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
