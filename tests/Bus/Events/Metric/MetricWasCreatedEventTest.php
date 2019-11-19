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

use App\Bus\Events\Metric\MetricWasCreatedEvent;
use App\Models\Metric;
use App\Models\User;

class MetricWasCreatedEventTest extends AbstractMetricEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User(), 'metric' => new Metric()];
        $object = new MetricWasCreatedEvent($params['user'], $params['metric']);

        return compact('params', 'object');
    }
}
