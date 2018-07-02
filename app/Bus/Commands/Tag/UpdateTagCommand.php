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
 * This is the update tag coommand class.
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
     * The new tag name.
     *
     * @var string|null
     */
    public $name;

    /**
     * The new tag slug.
     *
     * @var string|null
     */
    public $slug;

    /**
     * Create a new update tag command instance.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     * @param string|null                 $name
     * @param string|null                 $slug
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
