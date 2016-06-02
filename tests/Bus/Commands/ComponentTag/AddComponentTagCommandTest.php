<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\ComponentTag;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\ComponentTag\AddComponentTagCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\ComponentTag\AddComponentTagCommandHandler;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Tag;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add component tag command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class AddComponentTagCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['component' => new Component(), 'tag' => new Tag()];

        $object = new AddComponentTagCommand($params['component'], $params['tag']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return AddComponentTagCommandHandler::class;
    }
}
