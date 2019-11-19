<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\Incident;

use App\Bus\Events\ActionInterface;
use App\Models\Incident;
use App\Models\User;

final class IncidentWasUpdatedEvent implements ActionInterface, IncidentEventInterface
{
    /**
     * The user who updated the event.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The incident that has been updated.
     *
     * @var \App\Models\Incident
     */
    public $incident;

    /**
     * Create a new incident has updated event instance.
     *
     * @param \App\Models\User     $user
     * @param \App\Models\Incident $incident
     *
     * @return void
     */
    public function __construct(User $user, Incident $incident)
    {
        $this->user = $user;
        $this->incident = $incident;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Incident was updated.';
    }

    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction()
    {
        return [
            'user'        => $this->user,
            'description' => (string) $this,
        ];
    }
}
