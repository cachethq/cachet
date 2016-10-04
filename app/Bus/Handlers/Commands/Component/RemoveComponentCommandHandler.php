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
    }
}
