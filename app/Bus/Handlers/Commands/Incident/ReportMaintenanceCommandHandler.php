<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Incident;

use CachetHQ\Cachet\Bus\Commands\Incident\ReportMaintenanceCommand;
use CachetHQ\Cachet\Bus\Events\Incident\MaintenanceWasScheduledEvent;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Models\Incident;

class ReportMaintenanceCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new report maintenance command handler instance.
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
     * Handle the report maintenance command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\ReportMaintenanceCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function handle(ReportMaintenanceCommand $command)
    {
        $scheduledAt = $this->dates->create('d/m/Y H:i', $command->timestamp);

        $maintenanceEvent = Incident::create([
            'name'         => $command->name,
            'message'      => $command->message,
            'scheduled_at' => $scheduledAt,
            'status'       => 0,
            'visible'      => 1,
        ]);

        $maintenanceEvent->notify = (bool) $command->notify;

        event(new MaintenanceWasScheduledEvent($maintenanceEvent));

        return $maintenanceEvent;
    }
}
