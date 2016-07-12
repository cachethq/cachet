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

use CachetHQ\Cachet\Models\TimedAction;

/**
 * This is the delete timed action command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class DeleteTimedActionCommand
{
    /**
     * The timed action to delete.
     *
     * @var \CachetHQ\Cachet\Models\TimedAction
     */
    public $action;

    /**
     * Create a new delete timed action command instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return void
     */
    public function __construct(TimedAction $action)
    {
        $this->action = $action;
    }
}
