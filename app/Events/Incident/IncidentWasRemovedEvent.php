<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events\Incident;

use CachetHQ\Cachet\Models\Incident;

class IncidentWasRemovedEvent implements IncidentEventInterface
{
    /**
     * The incident that has been removed.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * Create a new incident was removed event instance.
     */
    public function __construct(Incident $incident)
    {
        $this->incident = $incident;
    }
}
