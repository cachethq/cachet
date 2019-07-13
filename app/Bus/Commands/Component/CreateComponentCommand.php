<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Component;

/**
 * This is the create component command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateComponentCommand
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
     * Is the component enabled?
     *
     * @var bool
     */
    public $enabled;

    /**
     * JSON meta data for the component.
     *
     * @var array|null
     */
    public $meta;

    /**
     * Tags string.
     *
     * @var string
     */
    public $tags;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'        => 'required|string',
        'description' => 'nullable|string',
        'status'      => 'required|int|min:0|max:4',
        'link'        => 'nullable|url',
        'order'       => 'nullable|int',
        'group_id'    => 'nullable|int',
        'enabled'     => 'nullable|bool',
        'meta'        => 'nullable|array',
        'tags'        => 'nullable|string',
    ];

    /**
     * Create a new add component command instance.
     *
     * @param string      $name
     * @param string      $description
     * @param int         $status
     * @param string      $link
     * @param int         $order
     * @param int         $group_id
     * @param bool        $enabled
     * @param array|null  $meta
     * @param string|null $tags
     *
     * @return void
     */
    public function __construct($name, $description, $status, $link, $order, $group_id, $enabled, $meta, $tags = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = (int) $status;
        $this->link = $link;
        $this->order = $order;
        $this->group_id = $group_id;
        $this->enabled = $enabled;
        $this->meta = $meta;
        $this->tags = $tags;
    }
}
