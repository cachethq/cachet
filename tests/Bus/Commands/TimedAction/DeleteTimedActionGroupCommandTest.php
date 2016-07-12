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
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionGroupCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\DeleteTimedActionGroupCommandHandler;
use CachetHQ\Cachet\Models\TimedActionGroup;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the delete timed action group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTimedActionGroupCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'group' => new TimedActionGroup(),
        ];

        $object = new DeleteTimedActionGroupCommand(
            $params['group']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return DeleteTimedActionGroupCommandHandler::class;
    }
}
