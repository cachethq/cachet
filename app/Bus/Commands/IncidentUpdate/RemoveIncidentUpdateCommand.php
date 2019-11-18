<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Commands\IncidentUpdate;

use App\Models\IncidentUpdate;

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
     * @var \App\Models\IncidentUpdate
     */
    public $incidentUpdate;

    /**
     * Create a new remove incident update command instance.
     *
     * @param \App\Models\IncidentUpdate $incidentUpdate
     *
     * @return void
     */
    public function __construct(IncidentUpdate $incidentUpdate)
    {
        $this->incidentUpdate = $incidentUpdate;
    }
}
