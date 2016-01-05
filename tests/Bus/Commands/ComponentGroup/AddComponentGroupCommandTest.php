<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\ComponentGroup;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\AddComponentGroupCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\ComponentGroup\AddComponentGroupCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add component group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AddComponentGroupCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['name' => 'Test', 'order' => 0];

        $object = new AddComponentGroupCommand($params['name'], $params['order']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return AddComponentGroupCommandHandler::class;
    }
}
