<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\TimedAction;

use CachetHQ\Cachet\Models\TimedAction;

/**
 * This is the timed action was updated event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class TimedActionWasUpdatedEvent implements TimedActionEventInterface
{
    /**
     * The action that has been updated.
     *
     * @var \CachetHQ\Cachet\Models\TimedAction
     */
    public $action;

    /**
     * Create a new timed action was updated event instance.
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
