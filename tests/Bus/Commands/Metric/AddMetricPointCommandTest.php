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
use CachetHQ\Cachet\Bus\Commands\Metric\AddMetricPointCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Metric\AddMetricPointCommandHandler;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add metric point command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AddMetricPointCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric(), 'value' => 1, 'created_at' => '2020-12-30 12:00:00'];
        $object = new AddMetricPointCommand($params['metric'], $params['value'], $params['created_at']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return AddMetricPointCommandHandler::class;
    }
}
