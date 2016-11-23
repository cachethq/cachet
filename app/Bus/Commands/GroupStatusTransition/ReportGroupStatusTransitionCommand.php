<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\GroupStatusTransition;

/**
 * This is the report component group status transition command.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
final class ReportGroupStatusTransitionCommand
{
    /**
     * The component.
     *
     * @var int
     */
    public $component_group_id;

    /**
     * The component group status.
     *
     * @var int
     */
    public $status;

    /**
     * The statuses of the components that are part of the component group.
     *
     * @var string
     */
    public $offending_components;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'component_group_id'   => 'required|int',
        'status'               => 'required|int|min:0|max:4',
        'offending_components' => 'nullable|string',
    ];

    /**
     * Create a new report status transition command instance.
     *
     * @param int    $component_group_id
     * @param int    $status
     * @param string $offending_components
     *
     * @return void
     */
    public function __construct($component_group_id, $status, $offending_components = null)
    {
        $this->component_group_id = $component_group_id;
        $this->status = $status;
        $this->offending_components = $offending_components;
    }
}
