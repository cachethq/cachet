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
use CachetHQ\Cachet\Bus\Commands\TimedAction\CheckTimedActionCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\CheckTimedActionCommandHandler;
use CachetHQ\Cachet\Models\TimedAction;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the update timed action command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CheckTimedActionCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'action' => new TimedAction(),
        ];

        $object = new CheckTimedActionCommand(
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
        return CheckTimedActionCommandHandler::class;
    }
}
