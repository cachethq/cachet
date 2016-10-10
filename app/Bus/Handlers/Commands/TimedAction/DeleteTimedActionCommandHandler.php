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

use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand;

/**
 * This is the delete timed action command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTimedActionCommandHandler
{
    /**
     * Handle the delete timed action command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand $command
     *
     * @return void
     */
    public function handle(DeleteTimedActionCommand $command)
    {
        $command->action->delete();
    }
}
