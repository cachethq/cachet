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

final class IncidentWasReportedEvent implements ActionInterface, IncidentEventInterface
{
    /**
     * The user who reported the event.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The incident that has been reported.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * Whether to notify that the incident was reported.
     *
     * @var bool
     */
    public $notify;

    /**
     * Create a new incident has reported event instance.
     *
     * @param \CachetHQ\Cachet\Models\User     $user
     * @param \CachetHQ\Cachet\Models\Incident $incident
     * @param bool                             $notify
     *
     * @return void
     */
    public function __construct(User $user, Incident $incident, $notify = false)
    {
        $this->user = $user;
        $this->incident = $incident;
        $this->notify = $notify;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Incident was reported.';
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
