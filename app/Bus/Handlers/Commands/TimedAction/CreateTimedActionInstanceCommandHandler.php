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

use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand;
use CachetHQ\Cachet\Models\TimedActionInstance;

/**
 * This is the create timed action instance command handler.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class CreateTimedActionInstanceCommandHandler
{
    /**
     * Handle the create timed action instance command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedActionInstance
     */
    public function handle(CreateTimedActionInstanceCommand $command)
    {
        return TimedActionInstance::create([
            'timed_action_id' => $command->action->id,
            'started_at'      => $command->started_at,
        ]);
    }
}
