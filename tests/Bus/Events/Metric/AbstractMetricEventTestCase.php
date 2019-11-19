<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Metric;

use AltThree\TestBench\EventTrait;
use App\Bus\Events\Metric\MetricEventInterface;
use Tests\AbstractTestCase;

abstract class AbstractMetricEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [MetricEventInterface::class];
    }
}
