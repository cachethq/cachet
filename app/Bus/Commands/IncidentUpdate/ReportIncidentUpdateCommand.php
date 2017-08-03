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

use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\User;

/**
 * This is the report incident update command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ReportIncidentUpdateCommand
{
    /**
     * The incident.
     *
     * @var \CachetHQ\Cachet\Models\Incident
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
     * The user.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'incident' => 'required',
        'status'   => 'required|int|min:1|max:4',
        'message'  => 'required|string',
        'user'     => 'required',
    ];

    /**
     * Create a new report incident update command instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     * @param string                           $status
     * @param string                           $message
     * @param \CachetHQ\Cachet\Models\User     $user
     *
     * @return void
     */
    public function __construct(Incident $incident, $status, $message, User $user)
    {
        $this->incident = $incident;
        $this->status = $status;
        $this->message = $message;
        $this->user = $user;
    }
}
