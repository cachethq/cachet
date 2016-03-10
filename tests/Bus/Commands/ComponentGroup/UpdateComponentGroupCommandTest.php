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
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\ComponentGroup\UpdateComponentGroupCommandHandler;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the update component group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UpdateComponentGroupCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['group' => new ComponentGroup(), 'name' => 'Foo', 'order' => 1, 'collapsed' => 2];
        $object = new UpdateComponentGroupCommand(
            $params['group'],
            $params['name'],
            $params['order'],
            $params['collapsed']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateComponentGroupCommandHandler::class;
    }
}
