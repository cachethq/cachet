<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\ComponentGroup;

use CachetHQ\Cachet\Commands\ComponentGroup\AddComponentGroupCommand;
use CachetHQ\Cachet\Handlers\Commands\ComponentGroup\AddComponentGroupCommandHandler;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the add component group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class AddComponentGroupCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = [
            'name'  => 'Test',
            'order' => 0,
        ];
        $object = new AddComponentGroupCommand(
            $params['name'],
            $params['order']
        );

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
