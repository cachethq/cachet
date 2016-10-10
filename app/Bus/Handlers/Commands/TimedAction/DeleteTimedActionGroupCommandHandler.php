<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction;

use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionGroupCommand;

/**
 * This is the delete timed action group command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTimedActionGroupCommandHandler
{
    /**
     * Handle the delete timed action group command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionGroupCommand $command
     *
     * @return void
     */
    public function handle(DeleteTimedActionGroupCommand $command)
    {
        $group = $command->group;

        // For every action in the group, set the group_id to 0.
        $group->actions->map(function ($action) {
            $action->update([
                'group_id' => 0,
            ]);
        });

        // Delete the group.
        $group->delete();
    }
}
