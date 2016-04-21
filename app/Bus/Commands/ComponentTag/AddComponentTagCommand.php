<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\ComponentTag;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Tag;

/**
 * This is the add component tag command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class AddComponentTagCommand
{
    /**
     * The component to add the tag to.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    public $component;

    /**
     * The tag to add to the component.
     *
     * @var \CachetHQ\Cachet\Models\Tag
     */
    public $tag;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'component' => 'required',
        'tag'       => 'required',
    ];

    /**
     * Create a add component tag command instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     * @param \CachetHQ\Cachet\Models\Tag       $tag
     *
     * @return void
     */
    public function __construct(Component $component, Tag $tag)
    {
        $this->component = $component;
        $this->tag = $tag;
    }
}
