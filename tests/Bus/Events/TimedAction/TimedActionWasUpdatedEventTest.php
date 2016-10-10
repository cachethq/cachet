<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\TimedAction;

use CachetHQ\Cachet\Bus\Events\TimedAction\TimedActionWasUpdatedEvent;
use CachetHQ\Cachet\Models\TimedAction;

/**
 * This is the timed action was updated event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionWasUpdatedEventTest extends AbstractTimedActionEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['action' => new TimedAction()];
        $object = new TimedActionWasUpdatedEvent($params['action']);

        return compact('params', 'object');
    }
}
