<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events\Metric;

use CachetHQ\Cachet\Models\Component;

class ComponentWasRemovedEvent
{
    /**
     * The component that was removed.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    public $component;

    /**
     * Create a new component was removed event instance.
     *
     * @return void
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
}
