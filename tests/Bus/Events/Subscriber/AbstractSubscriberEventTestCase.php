<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Subscriber;

use AltThree\TestBench\EventTrait;
use App\Bus\Events\Subscriber\SubscriberEventInterface;
use Tests\AbstractTestCase;

abstract class AbstractSubscriberEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [SubscriberEventInterface::class];
    }
}
