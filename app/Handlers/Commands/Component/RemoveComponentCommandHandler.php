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

use CachetHQ\Cachet\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Events\Component\ComponentWasRemovedEvent;
use CachetHQ\Cachet\Models\Component;

class RemoveComponentCommandHandler
{
    /**
     * Handle the remove component command.
     *
     * @param \CachetHQ\Cachet\Commands\Component\RemoveComponentCommand $command
     *
     * @return void
     */
    public function handle(RemoveComponentCommand $command)
    {
        $component = $command->component;

        event(new ComponentWasRemovedEvent($component));

        $component->delete();
    }
}
