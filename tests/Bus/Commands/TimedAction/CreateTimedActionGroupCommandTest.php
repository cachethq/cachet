<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\TimedAction;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionGroupCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\CreateTimedActionGroupCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the create timed action group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTimedActionGroupCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name'  => 'KPIs',
            'order' => 1,
        ];

        $object = new CreateTimedActionGroupCommand($params['name'], $params['order']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return CreateTimedActionGroupCommandHandler::class;
    }
}
