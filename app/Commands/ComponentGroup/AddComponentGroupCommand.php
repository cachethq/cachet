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

class AddComponentGroupCommand
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
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'  => 'required|string',
        'order' => 'integer',
    ];

    /**
     * Create a add component group command instance.
     *
     * @param string $name
     * @param int    $order
     *
     * @return void
     */
    public function __construct($name, $order)
    {
        $this->name = $name;
        $this->order = (int) $order;
    }
}
