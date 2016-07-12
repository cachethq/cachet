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

use AltThree\TestBench\EventTrait;
use CachetHQ\Cachet\Bus\Events\TimedAction\TimedActionEventInterface;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the abstract timed action event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractTimedActionEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [TimedActionEventInterface::class];
    }
}
