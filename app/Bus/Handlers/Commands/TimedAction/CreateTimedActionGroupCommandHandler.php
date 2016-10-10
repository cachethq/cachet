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

use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionGroupCommand;
use CachetHQ\Cachet\Models\TimedActionGroup;

/**
 * This is the create timed action time group command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTimedActionGroupCommandHandler
{
    /**
     * Handle the create timed action group command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionGroupCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedActionGroup
     */
    public function handle(CreateTimedActionGroupCommand $command)
    {
        return TimedActionGroup::create([
            'name'  => $command->name,
            'order' => $command->order,
        ]);
    }
}
