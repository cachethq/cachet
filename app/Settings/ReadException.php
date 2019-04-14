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
 * This is the read exception class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ReadException extends SettingsException
{
    /**
     * Create a new read exception instance.
     *
     * @param \Exception $e
     *
     * @return void
     */
    public function __construct(Exception $e)
    {
        parent::__construct('Unable to read Cachet settings', $e);
    }
}
