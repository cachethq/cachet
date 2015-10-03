<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\Component;

use CachetHQ\Cachet\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Handlers\Commands\Component\RemoveComponentCommandHandler;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the remove component command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class RemoveComponentCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = ['component' => new Component()];
        $object = new RemoveComponentCommand($params['component']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return RemoveComponentCommandHandler::class;
    }
}
