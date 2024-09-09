<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\IncidentUpdate;

use AltThree\TestBench\EventTrait;
use CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateEventInterface;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the abstract incident update event test case class.
 *
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractIncidentUpdateCommandTest extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [IncidentUpdateEventInterface::class];
    }
}
