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

/**
 * This is the create timed action command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateTimedActionCommand
{
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
     * The schedule start time.
     *
     * @var string
     */
    public $start_at;

    /**
     * The timezone of the action.
     *
     * @var string
     */
    public $timezone;

    /**
     * The length of time between each instance in seconds.
     *
     * @var int
     */
    public $window_length;

    /**
     * How often the action should be completed.
     *
     * @var int
     */
    public $completion_latency;

    /**
     * The group in which to place the timed action.
     *
     * @var int|null
     */
    public $timed_action_group_id;

    /**
     * Create a new created timed action command instance.
     *
     * @param string   $name
     * @param string   $description
     * @param bool     $active
     * @param string   $start_at
     * @param string   $timezone
     * @param int      $window_length
     * @param int      $completion_latency
     * @param int|null $timed_action_group_id
     *
     * @return void
     */
    public function __construct($name, $description, $active, $start_at, $timezone, $window_length, $completion_latency, $timed_action_group_id = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->start_at = $start_at;
        $this->active = $active;
        $this->timezone = $timezone;
        $this->window_length = $window_length;
        $this->completion_latency = $completion_latency;
        $this->timed_action_group_id = $timed_action_group_id;
    }
}
