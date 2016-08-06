<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\ComponentGroup;

use CachetHQ\Cachet\Models\ComponentGroup;

/**
 * This is the update component group command.
 *
 * @author James Brooks <james@alt-three.com>
 */
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
     * Is the component group collapsed?
     *
     * @var int
     */
    public $collapsed;

    /**
     * To whom should the component group be visible?
     *
     * @var int
     */
    public $visible;

    /**
     * The id of the creator of the component group.
     */
    public $created_by;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'      => 'string',
        'order'     => 'int',
        'collapsed' => 'int|between:0,3',
        'visible'   => 'int|between:0,3',
        'created_by' => 'int',
    ];

    /**
     * Create a add component group command instance.
     *
     * @param ComponentGroup $group
     * @param string         $name
     * @param int            $order
     * @param int            $collapsed
     * @param into           $visible
     * @param int            $created_by
     *
     * @return void
     */
    public function __construct(ComponentGroup $group, $name, $order, $collapsed, $visible, $created_by)
    {
        $this->group = $group;
        $this->name = $name;
        $this->order = (int) $order;
        $this->collapsed = $collapsed;
        $this->visible = (int) $visible;
        $this->created_by = (int) $created_by;
    }
}
