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

use CachetHQ\Cachet\Models\Tag;

/**
 * This is the update tag command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateTagCommand
{
    /**
     * The tag.
     *
     * @var \CachetHQ\Cachet\Models\Tag
     */
    public $tag;

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
        'tag'  => 'required',
        'name' => 'sometimes|string',
        'slug' => 'sometimes|string',
    ];

    /**
     * Create a new update tag command instance.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     * @param string                      $name
     * @param string                      $slug
     *
     * @return void
     */
    public function __construct(Tag $tag, $name, $slug)
    {
        $this->tag = $tag;
        $this->name = $name;
        $this->slug = $slug;
    }
}
