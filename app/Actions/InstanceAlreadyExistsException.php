<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Actions;

use RuntimeException;

/**
 * This is the instance already exists exception class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class InstanceAlreadyExistsException extends RuntimeException implements ActionExceptionInterface
{
    //
}
