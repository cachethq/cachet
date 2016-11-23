<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition;

/**
 * This is the report component status transition command.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
final class ReportComponentStatusTransitionCommand
{
    /**
     * The component.
     *
     * @var int
     */
    public $component_id;

    /**
     * The command status.
     *
     * @var int
     */
    public $status;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'component_id' => 'required|int',
        'status'       => 'required|int|min:0|max:4',
    ];

    /**
     * Create a new report status transition command instance.
     *
     * @param int $component_id
     * @param int $status
     *
     * @return void
     */
    public function __construct($component_id, $status)
    {
        $this->component_id = $component_id;
        $this->status = $status;
    }
}
