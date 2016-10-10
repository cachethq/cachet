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

use CachetHQ\Cachet\Models\TimedActionInstance;

/**
 * This is the update timed action instance command class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
final class UpdateTimedActionInstanceCommand
{
    /**
     * The timed action instance to update.
     *
     * @var \CachetHQ\Cachet\Models\TimedActionInstance
     */
    public $instance;

    /**
     * A message to store with the instance.
     *
     * @var string|null
     */
    public $message;

    /**
     * The time in which the action was completed.
     *
     * @var string|null
     */
    public $completed_at;

    /**
     * Create a new update timed action instance command instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionInstance $instance
     * @param string|null                                 $message
     * @param string|null                                 $completed_at
     *
     * @return void
     */
    public function __construct(TimedActionInstance $instance, $message, $completed_at)
    {
        $this->instance = $instance;
        $this->message = $message;
        $this->completed_at = $completed_at;
    }
}
