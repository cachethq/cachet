<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\Subscriber;

use CachetHQ\Cachet\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Handlers\Commands\Subscriber\UnsubscribeSubscriberCommandHandler;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use AltThree\TestBench\CommandTrait;

/**
 * This is the unsubscribe subscriber command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UnsubscribeSubscriberCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['subscriber' => new Subscriber()];
        $object = new UnsubscribeSubscriberCommand($params['subscriber']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return UnsubscribeSubscriberCommandHandler::class;
    }
}
