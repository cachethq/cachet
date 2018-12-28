<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Settings;

use Exception;

/**
 * This is the settings exception class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class SettingsException extends Exception
{
    /**
     * Create a new write exception instance.
     *
     * @param string     $m
     * @param \Exception $e
     *
     * @return void
     */
    public function __construct(string $m, Exception $e)
    {
        parent::__construct($m, 0, $e);
    }
}
