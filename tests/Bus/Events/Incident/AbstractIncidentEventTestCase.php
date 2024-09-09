<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Incident;

use AltThree\TestBench\EventTrait;
use CachetHQ\Cachet\Bus\Events\Incident\IncidentEventInterface;
use CachetHQ\Tests\Cachet\AbstractTestCase;

abstract class AbstractIncidentEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [IncidentEventInterface::class];
    }
}
