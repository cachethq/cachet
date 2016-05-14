<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\IncidentUpdate;

use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\RemoveIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasRemovedEvent;

/**
 * This is the remove incident update command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class RemoveIncidentUpdateCommandHandler
{
    /**
     * Handle the remove incident update command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\IncidentUpdate\RemoveIncidentUpdateCommand $command
     *
     * @return void
     */
    public function handle(RemoveIncidentUpdateCommand $command)
    {
        $update = $command->incidentUpdate;

        event(new IncidentUpdateWasRemovedEvent($update));

        $update->delete();
    }
}
