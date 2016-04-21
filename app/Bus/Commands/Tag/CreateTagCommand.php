<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Tag;

/**
 * This is the create tag command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateTagCommand
{
    /**
     * The name.
     *
     * @var string
     */
    public $name;

    /**
     * The slug.
     *
     * @var string
     */
    public $slug;

    /**
     * The validation rules.
     *
     * @var array
     */
    public $rules = [
        'name' => 'required|string',
        'slug' => 'sometimes|string',
    ];

    /**
     * Create a new create tag command instance.
     *
     * @param string $name
     * @param string $slug
     *
     * @return void
     */
    public function __construct($name, $slug)
    {
        $this->name = $name;
        $this->slug = $slug;
    }
}
