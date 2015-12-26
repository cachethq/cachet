<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Events\Metric;

use AltThree\TestBench\EventTrait;
use CachetHQ\Cachet\Events\Metric\MetricEventInterface;
use CachetHQ\Tests\Cachet\AbstractTestCase;

abstract class AbstractMetricEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [MetricEventInterface::class];
    }
}
