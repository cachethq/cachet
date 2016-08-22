<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Incident;

use CachetHQ\Cachet\Annotations\HandlerAnnotation;
use CachetHQ\Cachet\Models\Incident;

/**
 * This is the maintenance was scheduled event class.
 *
 * @HandlerAnnotation("CachetHQ\Cachet\Bus\Handlers\Events\Incident\SendMaintenanceEmailNotificationHandler")
 *
 * @author Joe Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
final class MaintenanceWasScheduledEvent implements IncidentEventInterface
{
    /**
     * The incident that has been reported.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * Create a new maintenance has scheduled event instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return void
     */
    public function __construct(Incident $incident)
    {
        $this->incident = $incident;
    }
}
