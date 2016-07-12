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

use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionInstanceCommand;

/**
 * This is the delete timed action instance command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTimedActionInstanceCommandHandler
{
    /**
     * Handle the delete timed action instance command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionInstanceCommand $command
     *
     * @return void
     */
    public function handle(DeleteTimedActionInstanceCommand $command)
    {
        $command->instance->delete();
    }
}
