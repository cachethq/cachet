<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Component;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Component\AddComponentCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Component\AddComponentCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add component command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AddComponentCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name'        => 'Test',
            'description' => 'Foo',
            'status'      => 1,
            'link'        => 'https://cachethq.io',
            'order'       => 0,
            'group_id'    => 0,
            'enabled'     => true,
            'meta'        => null,
        ];
        $object = new AddComponentCommand(
            $params['name'],
            $params['description'],
            $params['status'],
            $params['link'],
            $params['order'],
            $params['group_id'],
            $params['enabled'],
            $params['meta']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return AddComponentCommandHandler::class;
    }
}
