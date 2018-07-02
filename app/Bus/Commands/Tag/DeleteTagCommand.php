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
 * This is the delete tag coommand class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class DeleteTagCommand
{
    /**
     * The tag.
     *
     * @var \CachetHQ\Cachet\Models\Tag
     */
    public $tag;

    /**
     * Create a new delete tag command instance.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     *
     * @return void
     */
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }
}
