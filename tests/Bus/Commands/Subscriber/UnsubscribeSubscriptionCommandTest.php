<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\Subscriber;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\Subscriber\UnsubscribeSubscriptionCommand;
use App\Bus\Handlers\Commands\Subscriber\UnsubscribeSubscriptionCommandHandler;
use App\Models\Subscription;
use Tests\AbstractTestCase;

/**
 * This is the unsubscribe subscriber command test class.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
class UnsubscribeSubscriptionCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['subscription' => new Subscription()];
        $object = new UnsubscribeSubscriptionCommand($params['subscription']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return UnsubscribeSubscriptionCommandHandler::class;
    }
}
