<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\GroupStatusTransition;

use CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\RemoveGroupStatusTransitionCommand;

/**
 * This is the remove component group status transition command handler.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class RemoveGroupStatusTransitionCommandHandler
{
    /**
     * Handle the remove status transition command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\RemoveGroupStatusTransitionCommand $command
     *
     * @return void
     */
    public function handle(RemoveGroupStatusTransitionCommand $command)
    {
        $groupStatusTransition = $command->groupStatusTransition;
        $groupStatusTransition->delete();
    }
}
