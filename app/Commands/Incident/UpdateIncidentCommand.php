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

final class UpdateIncidentCommand
{
    /**
     * The incident to update.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public $incident;

    /**
     * The incident name.
     *
     * @var string
     */
    public $name;

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
     * The incident visibility.
     *
     * @var int
     */
    public $visible;

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
     * Whether to notify about the incident or not.
     *
     * @var bool
     */
    public $notify;

    /**
     * The date that the incident occurred on.
     *
     * @var string
     */
    public $incident_date;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'             => 'string',
        'status'           => 'integer',
        'message'          => 'string',
        'visible'          => 'boolean',
        'component_id'     => 'integer',
        'component_status' => 'integer',
        'notify'           => 'boolean',
    ];

    /**
     * Create a new update incident command instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $name
     * @param string                           $name
     * @param int                              $status
     * @param string                           $message
     * @param int                              $visible
     * @param int                              $component_id
     * @param int                              $component_status
     * @param bool                             $notify
     * @param string|null                      $incident_date
     *
     * @return void
     */
    public function __construct(Incident $incident, $name, $status, $message, $visible, $component_id, $component_status, $notify, $incident_date = null)
    {
        $this->incident = $incident;
        $this->name = $name;
        $this->status = $status;
        $this->message = $message;
        $this->visible = $visible;
        $this->component_id = $component_id;
        $this->component_status = $component_status;
        $this->notify = $notify;
        $this->incident_date = $incident_date;
    }
}
