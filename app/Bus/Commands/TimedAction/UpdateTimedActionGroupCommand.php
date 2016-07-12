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
final class UpdateTimedActionGroupCommand
{
    /**
     * The timed action group to update.
     *
     * @var \CachetHQ\Cachet\Models\TimedActionGroup
     */
    public $group;

    /**
     * The new name.
     *
     * @var string|null
     */
    public $name;

    /**
     * The new order.
     *
     * @var int|null
     */
    public $order;

    /**
     * Create a new delete timed action group command handler.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionGroup $group
     * @param string|null                              $name
     * @param int|null                                 $order
     *
     * @return void
     */
    public function __construct(TimedActionGroup $group, $name = null, $order = null)
    {
        $this->group = $group;
        $this->name = $name;
        $this->order = $order;
    }
}
