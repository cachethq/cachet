<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Exceptions\Subscriber;

use CachetHQ\Cachet\Bus\Exceptions\ExceptionInterface;
use Exception;

/**
 * This is the already subscribed exception class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class AlreadySubscribedException extends Exception implements ExceptionInterface
{
    //
}
