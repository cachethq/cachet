<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\System;

/**
 * This is the system was updated event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class SystemWasUpdatedEvent implements SystemEventInterface
{
    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'System was updated.';
    }
}
