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
     * A given incident template.
     *
     * @var string|null
     */
    public $template;

    /**
     * Variables for the incident template.
     *
     * @var string[]|null
     */
    public $template_vars;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'             => 'string',
        'status'           => 'int|min:0|max:4',
        'message'          => 'string',
        'visible'          => 'bool',
        'component_id'     => 'int',
        'component_status' => 'int|min:1|max:4|required_with:component_id',
        'notify'           => 'bool',
        'template'         => 'string',
    ];

    /**
     * Create a new update incident command instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     * @param string                           $name
     * @param int                              $status
     * @param string                           $message
     * @param int                              $visible
     * @param int                              $component_id
     * @param int                              $component_status
     * @param bool                             $notify
     * @param string|null                      $incident_date
     * @param string|null                      $template
     * @param array|null                       $template_vars
     *
     * @return void
     */
    public function __construct(Incident $incident, $name, $status, $message, $visible, $component_id, $component_status, $notify, $incident_date, $template, array $template_vars = null)
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
        $this->template = $template;
        $this->template_vars = $template_vars;
    }
}
