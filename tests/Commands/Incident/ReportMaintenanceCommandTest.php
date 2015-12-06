<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\Incident;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Commands\Incident\ReportMaintenanceCommand;
use CachetHQ\Cachet\Handlers\Commands\Incident\ReportMaintenanceCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add incident command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class ReportMaintenanceCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name'      => 'Test',
            'message'   => 'Foo bar baz',
            'notify'    => false,
            'timestamp' => '2020-12-30 00:00:01',
        ];

        $object = new ReportMaintenanceCommand(
            $params['name'],
            $params['message'],
            $params['notify'],
            $params['timestamp']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return ReportMaintenanceCommandHandler::class;
    }
}
