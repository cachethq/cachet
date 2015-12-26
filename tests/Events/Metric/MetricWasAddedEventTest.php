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

use CachetHQ\Cachet\Events\Metric\MetricWasAddedEvent;
use CachetHQ\Cachet\Models\Metric;

class MetricWasAddedEventTest extends AbstractMetricEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric()];
        $object = new MetricWasAddedEvent($params['metric']);

        return compact('params', 'object');
    }
}
