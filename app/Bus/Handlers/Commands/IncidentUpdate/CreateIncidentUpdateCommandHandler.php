<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Commands\IncidentUpdate;

use App\Bus\Commands\Incident\UpdateIncidentCommand;
use App\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use App\Bus\Events\IncidentUpdate\IncidentUpdateWasReportedEvent;
use App\Models\IncidentUpdate;
use Illuminate\Contracts\Auth\Guard;

/**
 * This is the report incident update command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateIncidentUpdateCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new report incident update command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle the report incident command.
     *
     * @param \App\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand $command
     *
     * @return \App\Models\IncidentUpdate
     */
    public function handle(CreateIncidentUpdateCommand $command)
    {
        $data = [
            'incident_id' => $command->incident->id,
            'status'      => $command->status,
            'message'     => $command->message,
            'user_id'     => $command->user->id,
        ];

        // Create the incident update.
        $update = IncidentUpdate::create($data);

        // Update the original incident with the new status.
        execute(new UpdateIncidentCommand(
            $command->incident,
            null,
            $command->status,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            []
        ));

        event(new IncidentUpdateWasReportedEvent($this->auth->user(), $update));

        return $update;
    }
}
