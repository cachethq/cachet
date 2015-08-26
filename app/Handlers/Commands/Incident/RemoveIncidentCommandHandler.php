<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\Incident;

use CachetHQ\Cachet\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Events\Incident\IncidentWasRemovedEvent;

class RemoveIncidentCommandHandler
{
    /**
     * Handle the remove incident command.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\RemoveIncidentCommand $command
     *
     * @return void
     */
    public function handle(RemoveIncidentCommand $command)
    {
        $incident = $command->incident;

        event(new IncidentWasRemovedEvent($incident));

        $incident->delete();
    }
}
