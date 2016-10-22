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
 * This is the add component group command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class AddComponentGroupCommand
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
    public $rules = [
        'name'      => 'required|string',
        'order'     => 'required|int',
        'collapsed' => 'required|int|between:0,3',
        'visible'   => 'required|bool',
    ];

    /**
     * Create a add component group command instance.
     *
     * @param string $name
     * @param int    $order
     * @param int    $collapsed
     * @param int    $visible
     *
     * @return void
     */
    public function __construct($name, $order, $collapsed, $visible)
    {
        $this->name = $name;
        $this->order = (int) $order;
        $this->collapsed = $collapsed;
        $this->visible = (int) $visible;
    }
}
