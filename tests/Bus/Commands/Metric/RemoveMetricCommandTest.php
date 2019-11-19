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
use App\Bus\Commands\Metric\RemoveMetricCommand;
use App\Bus\Handlers\Commands\Metric\RemoveMetricCommandHandler;
use App\Models\Metric;
use Tests\AbstractTestCase;

/**
 * This is the remove metric command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class RemoveMetricCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric()];
        $object = new RemoveMetricCommand($params['metric']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return RemoveMetricCommandHandler::class;
    }
}
