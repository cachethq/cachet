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
use CachetHQ\Cachet\Bus\Commands\Tag\UpdateTagCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Tag\UpdateTagCommandHandler;
use CachetHQ\Cachet\Models\Tag;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the update tag command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateTagCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'tag'  => new Tag(),
            'name' => 'Test',
            'slug' => 'test',
        ];

        $object = new UpdateTagCommand(
            $params['tag'],
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
        return UpdateTagCommandHandler::class;
    }
}
