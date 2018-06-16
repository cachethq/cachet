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
 * This is the create tag coommand class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateTagCommand
{
    /**
     * The tag name.
     *
     * @var string
     */
    public $name;

    /**
     * The tag slug.
     *
     * @var string|null
     */
    public $slug;

    /**
     * Create a new create tag command instance.
     *
     * @param string      $name
     * @param string|null $slug
     *
     * @return void
     */
    public function __construct($name, $slug = null)
    {
        $this->name = $name;
        $this->slug = $slug;
    }
}
