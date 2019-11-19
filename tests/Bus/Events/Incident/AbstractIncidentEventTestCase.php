<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Incident;

use AltThree\TestBench\EventTrait;
use App\Bus\Events\Incident\IncidentEventInterface;
use Tests\AbstractTestCase;

abstract class AbstractIncidentEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [IncidentEventInterface::class];
    }
}
