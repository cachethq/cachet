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

use CachetHQ\Cachet\Models\Component;

class RemoveComponentCommand
{
    /**
     * The component to remove.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    public $component;

    /**
     * Create a new remove component command instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return void
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
}
