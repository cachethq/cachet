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

use CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasRemovedEvent;
use Illuminate\Contracts\Auth\Guard;

class RemoveIncidentCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new remove incident command handler instance.
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
     * Handle the remove incident command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand $command
     *
     * @return void
     */
    public function handle(RemoveIncidentCommand $command)
    {
        $incident = $command->incident;

        event(new IncidentWasRemovedEvent($this->auth->user(), $incident));

        $incident->delete();
    }
}
