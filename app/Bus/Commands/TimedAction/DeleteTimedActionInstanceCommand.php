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
 * This is the delete timed action command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class DeleteTimedActionInstanceCommand
{
    /**
     * The timed action instance to delete.
     *
     * @var \CachetHQ\Cachet\Models\TimedActionInstance
     */
    public $instance;

    /**
     * Create a new delete timed action instance command instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionInstance $instance
     *
     * @return void
     */
    public function __construct(TimedActionInstance $instance)
    {
        $this->instance = $instance;
    }
}
