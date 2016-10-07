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

use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\ReportIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasReportedEvent;
use CachetHQ\Cachet\Models\IncidentUpdate;

/**
 * This is the report incident update command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ReportIncidentUpdateCommandHandler
{
    /**
     * Handle the report incident command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\IncidentUpdate\ReportIncidentUpdateCommand $command
     *
     * @return \CachetHQ\Cachet\Models\IncidentUpdate
     */
    public function handle(ReportIncidentUpdateCommand $command)
    {
        $data = [
            'incident_id' => $command->incident->id,
            'status'      => $command->status,
            'message'     => $command->message,
            'user_id'     => $command->user->id,
        ];

        // Create the incident update.
        $update = IncidentUpdate::create($data);

        // Update the original incident with the new status.
        dispatch(new UpdateIncidentCommand(
            $incident,
            null,
            $command->status,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        ));

        event(new IncidentUpdateWasReportedEvent($update));

        return $update;
    }
}
