<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\TimedAction;

use CachetHQ\Cachet\Models\TimedActionGroup;

/**
 * This is the delete timed action group command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class DeleteTimedActionGroupCommand
{
    /**
     * The timed action group to delete.
     *
     * @var \CachetHQ\Cachet\Models\TimedActionGroup
     */
    public $group;

    /**
     * Create a new delete timed action group command handler.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionGroup $group
     *
     * @return void
     */
    public function __construct(TimedActionGroup $group)
    {
        $this->group = $group;
    }
}
