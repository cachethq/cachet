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

use App\Bus\Events\Metric\MetricPointWasCreatedEvent;
use App\Models\MetricPoint;
use App\Models\User;

/**
 * This is the metric point was created event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MetricPointWasCreatedEventTest extends AbstractMetricEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User(), 'metricPoint' => new MetricPoint()];
        $object = new MetricPointWasCreatedEvent($params['user'], $params['metricPoint']);

        return compact('params', 'object');
    }
}
