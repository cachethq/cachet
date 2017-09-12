<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Incident;

/**
 * This is the create incident command.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
final class CreateIncidentCommand
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
     * Whether to stick the incident on top.
     *
     * @var bool
     */
    public $stickied;

    /**
     * The date at which the incident occurred at.
     *
     * @var string|null
     */
    public $occurred_at;

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
     * Meta key/value pairs.
     *
     * @var array
     */
    public $meta = [];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'             => 'required|string',
        'status'           => 'required|int|min:0|max:4',
        'message'          => 'nullable|string',
        'visible'          => 'nullable|bool',
        'component_id'     => 'nullable|required_with:component_status|int',
        'component_status' => 'nullable|required_with:component_id|int|min:0|max:4',
        'notify'           => 'nullable|bool',
        'stickied'         => 'required|bool',
        'occurred_at'      => 'nullable|string',
        'template'         => 'nullable|string',
        'meta'             => 'nullable|array',
    ];

    /**
     * Create a new create incident command instance.
     *
     * @param string      $name
     * @param int         $status
     * @param string      $message
     * @param int         $visible
     * @param int         $component_id
     * @param int         $component_status
     * @param bool        $notify
     * @param bool        $stickied
     * @param string|null $occurred_at
     * @param string|null $template
     * @param array       $template_vars
     * @param array       $meta
     *
     * @return void
     */
    public function __construct($name, $status, $message, $visible, $component_id, $component_status, $notify, $stickied, $occurred_at, $template, array $template_vars = [], $meta = [])
    {
        $this->name = $name;
        $this->status = $status;
        $this->message = $message;
        $this->visible = $visible;
        $this->component_id = $component_id;
        $this->component_status = $component_status;
        $this->notify = $notify;
        $this->stickied = $stickied;
        $this->occurred_at = $occurred_at;
        $this->template = $template;
        $this->template_vars = $template_vars;
        $this->meta = $meta;
    }
}
