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
        $component->update($this->filterComponentData($command));

        event(new ComponentWasUpdatedEvent($component));

        return $component;
    }

    protected function filterComponentData($command)
    {
        return array_filter([
            'name'        => $command->name,
            'description' => $command->description,
            'link'        => $command->link,
            'status'      => $command->status,
            'order'       => $command->order,
            'group_id'    => $command->group_id,
        ]);
    }
}
