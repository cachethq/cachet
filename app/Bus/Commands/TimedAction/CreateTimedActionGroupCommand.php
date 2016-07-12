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
 * This is the create timed action group command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateTimedActionGroupCommand
{
    /**
     * The name of the timed action group.
     *
     * @var string
     */
    public $name;

    /**
     * The order in which to show the group.
     *
     * @var int
     */
    public $order;

    /**
     * Create a new created timed action group command instance.
     *
     * @param string $name
     * @param int    $order
     *
     * @return void
     */
    public function __construct($name, $order)
    {
        $this->name = $name;
        $this->order = $order;
    }
}
