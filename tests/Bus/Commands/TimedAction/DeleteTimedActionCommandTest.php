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
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\DeleteTimedActionCommandHandler;
use CachetHQ\Cachet\Models\TimedAction;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the delete timed action command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTimedActionCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'action'       => new TimedAction(),
        ];

        $object = new DeleteTimedActionCommand(
            $params['action']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return DeleteTimedActionCommandHandler::class;
    }
}
