<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\Metric;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\Metric\UpdateMetricPointCommand;
use App\Bus\Handlers\Commands\Metric\UpdateMetricPointCommandHandler;
use App\Models\Metric;
use App\Models\MetricPoint;
use Tests\AbstractTestCase;

/**
 * This is the update metric point command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UpdateMetricPointCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'point'      => new MetricPoint(),
            'metric'     => new Metric(),
            'value'      => 1,
            'created_at' => '2012-12-30 12:00:00',
        ];

        $object = new UpdateMetricPointCommand(
            $params['point'],
            $params['metric'],
            $params['value'],
            $params['created_at']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateMetricPointCommandHandler::class;
    }
}
