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

use CachetHQ\Cachet\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Handlers\Commands\Metric\RemoveMetricCommandHandler;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the remove metric command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class RemoveMetricCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric()];
        $object = new RemoveMetricCommand($params['metric']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return RemoveMetricCommandHandler::class;
    }
}
