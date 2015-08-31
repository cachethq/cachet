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

use CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Events\Incident\IncidentWasReportedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;

class ReportIncidentCommandHandler
{
    /**
     * Handle the report incident command.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand $command
     *
     * @return void
     */
    public function handle(ReportIncidentCommand $command)
    {
        $incident = Incident::create([
            'name'      => $command->name,
            'status'    => $command->status,
            'message'   => $command->message,
            'visible'   => $command->visible,
            'component' => $command->component_id,
        ]);

        // Update the component.
        if ($command->component_id) {
            Component::find($command->component_id)->update([
                'status' => $command->component_status,
            ]);
        }

        // Notify subscribers.
        if ($command->notify) {
            event(new IncidentWasReportedEvent($incident));
        }

        return $incident;
    }
}
