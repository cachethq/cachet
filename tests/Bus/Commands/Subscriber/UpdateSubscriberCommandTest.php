<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Subscriber;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Subscriber\UpdateSubscriberCommandHandler;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the update subscriber command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Piotr Grabowski <pgrabowski@fandom.com>
 */
class UpdateSubscriberCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['subscriber' => new Subscriber(), 'email' => 'support@cachethq.io', 'verified' => true, 'subscriptions' => null];
        $object = new UpdateSubscriberCommand($params['subscriber'], $params['email'], $params['verified'], $params['subscriptions']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return UpdateSubscriberCommandHandler::class;
    }

    protected function objectHasRules()
    {
        return true;
    }
}
