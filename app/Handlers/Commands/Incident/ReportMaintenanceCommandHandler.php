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

use CachetHQ\Cachet\Commands\Incident\ReportMaintenanceCommand;
use CachetHQ\Cachet\Events\Incident\MaintenanceWasScheduledEvent;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Support\Facades\Config;
use Jenssegers\Date\Date;

class ReportMaintenanceCommandHandler
{
    /**
     * Handle the report maintenance command.
     *
     * @param \CachetHQ\Cachet\Commands\Incident\ReportMaintenanceCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function handle(ReportMaintenanceCommand $command)
    {
        // TODO: Add validation to scheduledAt
        $scheduledAt = Date::createFromFormat('d/m/Y H:i', $command->timestamp, config('cachet.timezone'))
            ->setTimezone(Config::get('app.timezone'));

        $maintenanceEvent = Incident::create([
            'name'         => $command->name,
            'message'      => $command->message,
            'scheduled_at' => $scheduledAt,
            'status'       => 0,
            'visible'      => 1,
        ]);

        // Notify subscribers.
        event(new MaintenanceWasScheduledEvent($maintenanceEvent));

        return $maintenanceEvent;
    }
}
