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

use CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Events\Incident\IncidentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Support\Facades\Config;
use Jenssegers\Date\Date;

class UpdateIncidentCommandHandler
{
    /**
     * Handle the update incident command.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function handle(UpdateIncidentCommand $command)
    {
        $incident = $command->incident;
        $incident->update($this->filterIncidentData($command));

        // The incident occurred at a different time.
        if ($command->incident_date) {
            $incidentDate = Date::createFromFormat('d/m/Y H:i', $command->incident_date, config('cachet.timezone'))->setTimezone(Config::get('app.timezone'));

            $incident->update([
                'created_at' => $incidentDate,
                'updated_at' => $incidentDate,
            ]);
        }

        // Update the component.
        if ($command->component_id) {
            Component::find($command->component_id)->update([
                'status' => $command->component_status,
            ]);
        }

        // Notify subscribers.
        if ($command->notify) {
            event(new IncidentWasUpdatedEvent($incident));
        }

        return $incident;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand $command
     *
     * @return array
     */
    protected function filterIncidentData($command)
    {
        return array_filter([
            'name'             => $command->name,
            'status'           => $command->status,
            'message'          => $command->message,
            'visible'          => $command->visible,
            'component_id'     => $command->component_id,
            'component_status' => $command->component_status,
            'notify'           => $command->notify,
        ]);
    }
}
