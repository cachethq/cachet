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

use CachetHQ\Cachet\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Handlers\Commands\ComponentGroup\RemoveComponentGroupCommandHandler;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the remove component group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class RemoveComponentGroupCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = ['group' => new ComponentGroup()];
        $object = new RemoveComponentGroupCommand($params['group']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return RemoveComponentGroupCommandHandler::class;
    }
}
