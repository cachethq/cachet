<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\GroupStatusTransition;

use CachetHQ\Cachet\Models\GroupStatusTransition;

/**
 * This is the remove component group status transition command.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
final class RemoveGroupStatusTransitionCommand
{
    /**
     * The status transition to remove.
     *
     * @var \CachetHQ\Cachet\Models\GroupStatusTransition
     */
    public $groupStatusTransition;

    /**
     * Create a new remove status transition command instance.
     *
     * @param \CachetHQ\Cachet\Models\GroupStatusTransition $groupStatusTransition
     *
     * @return void
     */
    public function __construct(GroupStatusTransition $groupStatusTransition)
    {
        $this->groupStatusTransition = $groupStatusTransition;
    }
}
