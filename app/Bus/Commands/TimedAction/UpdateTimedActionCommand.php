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
 * This is the update timed action command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateTimedActionCommand
{
    /**
     * The action that we're updating.
     *
     * @var \CachetHQ\Cachet\Models\TimedAction
     */
    public $action;

    /**
     * The name of the timed action.
     *
     * @var string
     */
    public $name;

    /**
     * A description of what the timed action does.
     *
     * @var string
     */
    public $description;

    /**
     * Whether the timed action is active.
     *
     * @var bool
     */
    public $active;

    /**
     * The group in which to place the timed action.
     *
     * @var int|null
     */
    public $timed_action_group_id;

    /**
     * Create a new update timed action command instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     * @param string                              $name
     * @param string                              $description
     * @param bool                                $active
     * @param int|null                            $timed_action_group_id
     *
     * @return void
     */
    public function __construct(TimedAction $action, $name, $description, $active, $timed_action_group_id = null)
    {
        $this->action = $action;
        $this->name = $name;
        $this->description = $description;
        $this->active = $active;
        $this->timed_action_group_id = $timed_action_group_id;
    }
}
