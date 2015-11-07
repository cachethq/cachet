<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\Component;

use CachetHQ\Cachet\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;

class UpdateComponentCommandHandler
{
    /**
     * Handle the update component command.
     *
     * @param \CachetHQ\Cachet\Commands\Component\UpdateComponentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function handle(UpdateComponentCommand $command)
    {
        $component = $command->component;

        $component->update($this->filter($command));

        event(new ComponentWasUpdatedEvent($component));

        return $component;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\UpdateComponentCommand $command
     *
     * @return array
     */
    protected function filter(UpdateComponentCommand $command)
    {
        return array_filter([
            'name'        => $command->name,
            'description' => $command->description,
            'link'        => $command->link,
            'status'      => $command->status,
            'enabled'     => $command->enabled,
            'order'       => $command->order,
            'group_id'    => $command->group_id,
        ], 'is_null');
    }
}
