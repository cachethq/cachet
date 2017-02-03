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

use CachetHQ\Cachet\Models\Incident;

final class IncidentWasReportedEvent implements IncidentEventInterface
{
    /**
     * The incident that has been reported.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * Whether to notify that the incident was reported.
     *
     * @var bool
     */
    public $notify;

    /**
     * Create a new incident has reported event instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     * @param bool                             $notify
     *
     * @return void
     */
    public function __construct(Incident $incident, $notify = false)
    {
        $this->incident = $incident;
        $this->notify = $notify;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Incident was reported.';
    }
}
