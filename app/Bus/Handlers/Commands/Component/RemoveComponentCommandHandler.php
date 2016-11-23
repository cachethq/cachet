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

use CachetHQ\Cachet\Bus\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasRemovedEvent;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupStatusWasUpdatedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;

class RemoveComponentCommandHandler
{
    /**
     * Handle the remove component command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Component\RemoveComponentCommand $command
     *
     * @return void
     */
    public function handle(RemoveComponentCommand $command)
    {
        $component = $command->component;

        event(new ComponentWasRemovedEvent($component));

        $component->delete();

        // Trigger the event for when the component is deleted.
        if ($component->group_id) {
            event(new ComponentGroupStatusWasUpdatedEvent((new ComponentGroup())->find($component->group_id)));
        }
    }
}
