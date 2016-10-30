<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Metric;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Metric\RemoveMetricPointCommandHandler;
use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the remove metric point command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class RemoveMetricPointCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['metricPoint' => new MetricPoint()];
        $object = new RemoveMetricPointCommand($params['metricPoint']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return RemoveMetricPointCommandHandler::class;
    }
}
