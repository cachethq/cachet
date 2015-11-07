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
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Events\Incident\IncidentWasReportedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;

class ReportIncidentCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new report incident command handler instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(DateFactory $dates)
    {
        $this->dates = $dates;
    }

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
            $incidentDate = $this->dates->createNormalized('d/m/Y H:i', $command->incident_date);

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
