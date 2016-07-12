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
     * A message to store with the instance.
     *
     * @var null|string
     */
    public $message;

    /**
     * The time in which the action was started.
     *
     * @var string
     */
    public $started_at;

    /**
     * The time in which the action was completed.
     *
     * @var string
     */
    public $completed_at;

    /**
     * If the instance has failed.
     *
     * @var bool
     */
    public $failed;

    /**
     * Create a new created timed action instance command instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     * @param null|string                         $message
     * @param string                              $started_at
     * @param string                              $completed_at
     * @param bool                                $failed
     *
     * @return void
     */
    public function __construct(TimedAction $action, $message, $started_at, $completed_at, $failed = false)
    {
        $this->action = $action;
        $this->message = $message;
        $this->started_at = $started_at;
        $this->completed_at = $completed_at;
        $this->failed = $failed;
    }
}
