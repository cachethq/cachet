<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\IncidentUpdate;

use CachetHQ\Cachet\Models\IncidentUpdate;

/**
 * This is the remove incident update command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class RemoveIncidentUpdateCommand
{
    /**
     * The incident update to remove.
     *
     * @var \CachetHQ\Cachet\Models\IncidentUpdate
     */
    public $incidentUpdate;

    /**
     * Create a new remove incident update command instance.
     *
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $incidentUpdate
     *
     * @return void
     */
    public function __construct(IncidentUpdate $incidentUpdate)
    {
        $this->incidentUpdate = $incidentUpdate;
    }
}
