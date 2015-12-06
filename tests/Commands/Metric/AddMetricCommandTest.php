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

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Handlers\Commands\Metric\AddMetricCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add metric command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AddMetricCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name'          => 'Coffee',
            'suffix'        => 'cups',
            'description'   => 'Cups of coffee consumed',
            'default_value' => 0,
            'calc_type'     => 0,
            'display_chart' => 1,
            'places'        => 0,
        ];

        $object = new AddMetricCommand(
            $params['name'],
            $params['suffix'],
            $params['description'],
            $params['default_value'],
            $params['calc_type'],
            $params['display_chart'],
            $params['places']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return AddMetricCommandHandler::class;
    }
}
