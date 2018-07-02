<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Tag;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Tag\CreateTagCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Tag\CreateTagCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the create tag command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTagCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name' => 'Test',
            'slug' => 'test',
        ];

        $object = new CreateTagCommand(
            $params['name'],
            $params['slug']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return CreateTagCommandHandler::class;
    }
}
