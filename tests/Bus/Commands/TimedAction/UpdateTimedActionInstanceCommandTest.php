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
use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionInstanceCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\UpdateTimedActionInstanceCommandHandler;
use CachetHQ\Cachet\Models\TimedActionInstance;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Carbon\Carbon;

/**
 * This is the update timed action instance command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UpdateTimedActionInstanceCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'instance'     => new TimedActionInstance(),
            'message'      => 'foo',
            'completed_at' => Carbon::now()->toDateTimeString(),
        ];

        $object = new UpdateTimedActionInstanceCommand(
            $params['instance'],
            $params['message'],
            $params['completed_at']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return UpdateTimedActionInstanceCommandHandler::class;
    }
}
