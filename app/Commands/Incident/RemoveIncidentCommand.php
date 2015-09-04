<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Incident;

use CachetHQ\Cachet\Models\Incident;

class RemoveIncidentCommand
{
    /**
     * The incident to remove.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * Create a new remove incident command instance.
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
