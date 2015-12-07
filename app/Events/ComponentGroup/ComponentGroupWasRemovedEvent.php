<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events\ComponentGroup;

use CachetHQ\Cachet\Models\ComponentGroup;

class ComponentGroupWasRemovedEvent implements ComponentGroupEventInterface
{
    /**
     * The component group that was removed.
     *
     * @var \CachetHQ\Cachet\Models\ComponentGroup
     */
    public $group;

    /**
     * Create a new component group was removed event instance.
     *
     * @return void
     */
    public function __construct(ComponentGroup $group)
    {
        $this->group = $group;
    }
}
