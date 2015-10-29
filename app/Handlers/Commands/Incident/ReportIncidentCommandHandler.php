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
use Illuminate\Support\Facades\Config;
use Jenssegers\Date\Date;

class ReportIncidentCommandHandler
{
    /**
     * Handle the report incident command.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function handle(ReportIncidentCommand $command)
    {
        $data = [
            'name'    => $command->name,
            'status'  => $command->status,
            'message' => $command->message,
            'visible' => $command->visible,
        ];

        // Link with the component.
        if ($command->component_id) {
            $data['component_id'] = $command->component_id;
        }

        // The incident occurred at a different time.
        if ($command->incident_date) {
            $incidentDate = Date::createFromFormat('d/m/Y H:i', $command->incident_date, config('cachet.timezone'))->setTimezone(Config::get('app.timezone'));

            $data['created_at'] = $incidentDate;
            $data['updated_at'] = $incidentDate;
        }

        // Create the incident
        $incident = Incident::create($data);

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
