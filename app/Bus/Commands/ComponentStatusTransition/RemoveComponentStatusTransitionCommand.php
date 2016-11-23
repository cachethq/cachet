<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition;

use CachetHQ\Cachet\Models\ComponentStatusTransition;

/**
 * This is the remove component status transition command.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
final class RemoveComponentStatusTransitionCommand
{
    /**
     * The status transition to remove.
     *
     * @var \CachetHQ\Cachet\Models\ComponentStatusTransition
     */
    public $componentStatusTransition;

    /**
     * Create a new remove status transition command instance.
     *
     * @param \CachetHQ\Cachet\Models\ComponentStatusTransition $componentStatusTransition
     *
     * @return void
     */
    public function __construct(ComponentStatusTransition $componentStatusTransition)
    {
        $this->componentStatusTransition = $componentStatusTransition;
    }
}
