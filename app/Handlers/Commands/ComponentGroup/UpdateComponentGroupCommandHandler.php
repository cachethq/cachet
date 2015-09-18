<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\ComponentGroup;

use CachetHQ\Cachet\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Events\ComponentGroup\ComponentGroupWasUpdatedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;

class UpdateComponentGroupCommandHandler
{
    /**
     * Handle the update component group command.
     *
     * @param \CachetHQ\Cachet\Commands\ComponentGroup\UpdateComponentGroupCommand $command
     *
     * @return \CachetHQ\Cachet\Models\ComponentGroup
     */
    public function handle(UpdateComponentGroupCommand $command)
    {
        $group = $command->group;
        $group->update([
            'name'  => $command->name,
            'order' => $command->order,
        ]);

        event(new ComponentGroupWasUpdatedEvent($group));

        return $group;
    }
}
