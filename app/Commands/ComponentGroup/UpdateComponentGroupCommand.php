<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\ComponentGroup;

use CachetHQ\Cachet\Models\ComponentGroup;

final class UpdateComponentGroupCommand
{
    /**
     * The component group.
     *
     * @var \CachetHQ\Cachet\Models\ComponentGroup
     */
    public $group;

    /**
     * The component group name.
     *
     * @var string
     */
    public $name;

    /**
     * The component group description.
     *
     * @var int
     */
    public $order;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'  => 'string',
        'order' => 'integer',
    ];

    /**
     * Create a add component group command instance.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     * @param string                                 $name
     * @param int                                    $order
     *
     * @return void
     */
    public function __construct(ComponentGroup $group, $name, $order)
    {
        $this->group = $group;
        $this->name = $name;
        $this->order = (int) $order;
    }
}
