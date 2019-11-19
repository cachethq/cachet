<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\System;

use AltThree\TestBench\EventTrait;
use App\Bus\Events\System\SystemEventInterface;
use Tests\AbstractTestCase;

/**
 * This is the abstract system event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractSystemEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [SystemEventInterface::class];
    }
}
