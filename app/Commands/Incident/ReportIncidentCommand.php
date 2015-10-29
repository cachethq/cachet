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

final class ReportIncidentCommand
{
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
     * The date at which the incident occurred.
     *
     * @var string|null
     */
    public $incident_date;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'             => 'required|string',
        'status'           => 'required|int',
        'message'          => 'string',
        'visible'          => 'bool',
        'component_id'     => 'int',
        'component_status' => 'int',
        'notify'           => 'bool',
        'incident_date'    => 'string',
    ];

    /**
     * Create a new report incident command instance.
     *
     * @param string      $name
     * @param int         $status
     * @param string      $message
     * @param int         $visible
     * @param int         $component_id
     * @param int         $component_status
     * @param bool        $notify
     * @param string|null $incident_date
     *
     * @return void
     */
    public function __construct($name, $status, $message, $visible, $component_id, $component_status, $notify, $incident_date)
    {
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
