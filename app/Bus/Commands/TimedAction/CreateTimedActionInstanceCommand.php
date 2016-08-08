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
 * This is the create timed action instance command class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
final class CreateTimedActionInstanceCommand
{
    /**
     * The action that the instance belongs to.
     *
     * @var \CachetHQ\Cachet\Models\TimedAction
     */
    public $action;

    /**
     * The time in which the action was started.
     *
     * @var string
     */
    public $started_at;

    public $rules = [
        'action'     => 'required',
        'started_at' => 'required|string',
    ];

    /**
     * Create a new create timed action instance command instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     * @param string                              $started_at
     *
     * @return void
     */
    public function __construct(TimedAction $action, $started_at)
    {
        $this->action = $action;
        $this->started_at = $started_at;
    }
}
