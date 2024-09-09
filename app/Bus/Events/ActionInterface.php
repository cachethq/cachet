<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events;

/**
 * This is the action interface.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
interface ActionInterface
{
    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction();
}
