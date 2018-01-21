<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Contracts;

/**
 * This is the system interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface System
{
    /**
     * Get the entire system status.
     *
     * @return array
     */
    public function getStatus();

    /**
     * Determine if Cachet is allowed to send notifications to users, subscribers or third party tools.
     *
     * @return bool
     */
    public function canNotifySubscribers();

    /**
     * Get the cachet version.
     *
     * @return string
     */
    public function getVersion();

    /**
     * Get the table prefix.
     *
     * @return string
     */
    public function getTablePrefix();
}
