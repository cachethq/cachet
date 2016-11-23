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

use CachetHQ\Cachet\Models\ComponentStatusTransition;

/**
 * This is the update status transition command.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
final class UpdateComponentStatusTransitionCommand
{
    /**
     * The component status transition.
     *
     * @var \CachetHQ\Cachet\Models\ComponentStatusTransition
     */
    public $componentStatusTransition;

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
     * @param \CachetHQ\Cachet\Models\ComponentStatusTransition $componentStatusTransition
     * @param int                                               $component_id
     * @param int                                               $status
     *
     * @return void
     */
    public function __construct(ComponentStatusTransition $componentStatusTransition, $component_id, $status)
    {
        $this->componentStatusTransition = $componentStatusTransition;
        $this->component_id = $component_id;
        $this->status = $status;
    }
}
