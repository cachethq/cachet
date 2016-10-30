<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\System;

use CachetHQ\Cachet\Bus\Events\System\SystemWasInstalledEvent;

/**
 * This is the system was installed event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SystemWasInstalledEventTest extends AbstractSystemEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = [];
        $object = new SystemWasInstalledEvent();

        return compact('params', 'object');
    }
}
