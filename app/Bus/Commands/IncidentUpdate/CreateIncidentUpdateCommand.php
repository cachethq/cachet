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

use App\Models\Incident;
use App\Models\User;

/**
 * This is the report incident update command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateIncidentUpdateCommand
{
    /**
     * The incident.
     *
     * @var \App\Models\Incident
     */
    public $incident;

    /**
     * The incident status.
     *
     * @var int
     */
    public $status;

    /**
     * The incident message.
     *
     * @var string
     */
    public $message;
    /**
     * The incident component.
     *
     * @var int
     */
    public $component_id;

    /**
     * The component status.
     *
     * @var int
     */
    public $component_status;
    /**
     * The user.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'incident'         => 'required',
        'status'           => 'required|int|min:1|max:4',
        'message'          => 'required|string',
        'component_id'     => 'nullable|required_with:component_status|int',
        'component_status' => 'nullable|required_with:component_id|int|min:0|max:4',
        'user'             => 'required',
    ];

    /**
     * Create a new report incident update command instance.
     *
     * @param \App\Models\Incident $incident
     * @param string               $status
     * @param string               $message
     * @param \App\Models\User     $user
     *
     * @return void
     */
    public function __construct(Incident $incident, $status, $message, $component_id, $component_status, User $user)
    {
        $this->incident = $incident;
        $this->status = $status;
        $this->message = $message;
        $this->component_id = $component_id;
        $this->component_status = $component_status;
        $this->user = $user;
    }
}
