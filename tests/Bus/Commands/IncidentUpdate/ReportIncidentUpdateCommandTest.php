<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\IncidentUpdate;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\ReportIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\IncidentUpdate\ReportIncidentUpdateCommandHandler;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the report incident update command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ReportIncidentUpdateCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'incident' => new Incident(),
            'status'   => 1,
            'message'  => 'Foo',
            'user'     => new User(),
        ];
        $object = new ReportIncidentUpdateCommand($params['incident'], $params['status'], $params['message'], $params['user']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return ReportIncidentUpdateCommandHandler::class;
    }
}
