<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\Metric;

use CachetHQ\Cachet\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Handlers\Commands\Metric\RemoveMetricPointCommandHandler;
use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the remove metric point command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class RemoveMetricPointCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = ['metricPoint' => new MetricPoint()];
        $object = new RemoveMetricPointCommand($params['metricPoint']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return RemoveMetricPointCommandHandler::class;
    }
}
