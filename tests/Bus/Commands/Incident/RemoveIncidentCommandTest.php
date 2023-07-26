<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Incident;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Incident\RemoveIncidentCommandHandler;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the remove incident command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class RemoveIncidentCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['incident' => new Incident()];
        $object = new RemoveIncidentCommand($params['incident']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return RemoveIncidentCommandHandler::class;
    }
}
