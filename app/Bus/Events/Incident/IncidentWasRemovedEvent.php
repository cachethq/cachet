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

use CachetHQ\Cachet\Bus\Events\ActionInterface;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\User;

final class IncidentWasRemovedEvent implements ActionInterface, IncidentEventInterface
{
    /**
     * The user who removed the event.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The incident that has been removed.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * Create a new incident was removed event instance.
     *
     * @param \CachetHQ\Cachet\Models\User     $user
     * @param \CachetHQ\Cachet\Models\Incident $incident
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
        return 'Incident was removed.';
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
