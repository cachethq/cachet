<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\ComponentGroup;

use CachetHQ\Cachet\Bus\Commands\ComponentGroup\AddComponentGroupCommand;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasAddedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;

class AddComponentGroupCommandHandler
{
    /**
     * Handle the add component group command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentGroup\AddComponentGroupCommand $command
     *
     * @return \CachetHQ\Cachet\Models\ComponentGroup
     */
    public function handle(AddComponentGroupCommand $command)
    {
        $group = ComponentGroup::create([
            'name'  => $command->name,
            'order' => $command->order,
        ]);

        event(new ComponentGroupWasAddedEvent($group));

        return $group;
    }
}
