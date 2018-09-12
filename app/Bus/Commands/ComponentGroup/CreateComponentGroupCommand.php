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

/**
 * This is the create component group command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateComponentGroupCommand
{
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
     * Is the component visible to public?
     *
     * @var int
     */
    public $visible;

    /**
     * The validation rules.
     *
     * @var string[]
     */

    /**
     * The group this belongs to.
     *
     * @var int
     */
    public $parent_id;

    public $rules = [
        'name'      => 'required|string',
        'order'     => 'required|int',
        'collapsed' => 'required|int|between:0,4',
        'visible'   => 'required|bool',
        'parent_id'  => 'nullable|int',
    ];

    /**
     * Create a add component group command instance.
     *
     * @param string $name
     * @param int    $order
     * @param int    $collapsed
     * @param int    $visible
     * @param int    $parent_id
     *
     * @return void
     */
    public function __construct($name, $order, $collapsed, $visible, $parent_id)
    {
        $this->name = $name;
        $this->order = (int) $order;
        $this->collapsed = $collapsed;
        $this->visible = (int) $visible;
        $this->parent_id = $parent_id;
    }
}
