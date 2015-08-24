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

use CachetHQ\Cachet\Commands\Component\AddComponentCommand;
use CachetHQ\Cachet\Events\Component\ComponentWasAddedEvent;
use CachetHQ\Cachet\Models\Component;

class AddComponentCommandHandler
{
    /**
     * Handle the add component command.
     *
     * @param \CachetHQ\Cachet\Commands\Component\AddComponentCommand $command
     *
     * @return void
     */
    public function handle(AddComponentCommand $command)
    {
        $component = Component::create([
            'name'        => $command->name,
            'description' => $command->description,
            'link'        => $command->link,
            'status'      => $command->status,
            'order'       => $command->order,
            'group_id'    => $command->group_id,
        ]);

        event(new ComponentWasAddedEvent($component));

        return $component;
    }
}
