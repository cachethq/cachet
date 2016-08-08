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
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\CreateTimedActionInstanceCommandHandler;
use CachetHQ\Cachet\Models\TimedAction;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Carbon\Carbon;

/**
 * This is the create timed action instance command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTimedActionInstanceCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'action'     => new TimedAction(),
            'started_at' => Carbon::now()->toDateTimeString(),
        ];

        $object = new CreateTimedActionInstanceCommand(
            $params['action'],
            $params['started_at']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return CreateTimedActionInstanceCommandHandler::class;
    }
}
