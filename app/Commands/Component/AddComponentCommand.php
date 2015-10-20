<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Component;

final class AddComponentCommand
{
    /**
     * The component name.
     *
     * @var string
     */
    public $name;

    /**
     * The component description.
     *
     * @var string
     */
    public $description;

    /**
     * The component status.
     *
     * @var int
     */
    public $status;

    /**
     * The component link.
     *
     * @var string
     */
    public $link;

    /**
     * The component order.
     *
     * @var int
     */
    public $order;

    /**
     * The component group.
     *
     * @var int
     */
    public $group_id;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'        => 'required|string',
        'description' => 'string',
        'status'      => 'required|int',
        'link'        => 'url',
        'order'       => 'int',
        'group_id'    => 'int',
    ];

    /**
     * Create a new add component command instance.
     *
     * @param string $name
     * @param string $description
     * @param int    $status
     * @param string $link
     * @param int    $order
     * @param int    $group_id
     *
     * @return void
     */
    public function __construct($name, $description, $status, $link, $order, $group_id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = (int) $status;
        $this->link = $link;
        $this->order = $order;
        $this->group_id = $group_id;
    }
}
