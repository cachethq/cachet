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

use CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\RemoveComponentStatusTransitionCommand;

/**
 * This is the remove status transition command handler.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class RemoveComponentStatusTransitionCommandHandler
{
    /**
     * Handle the remove status transition command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\RemoveComponentStatusTransitionCommand $command
     *
     * @return void
     */
    public function handle(RemoveComponentStatusTransitionCommand $command)
    {
        $componentStatusTransition = $command->componentStatusTransition;
        $componentStatusTransition->delete();
    }
}
