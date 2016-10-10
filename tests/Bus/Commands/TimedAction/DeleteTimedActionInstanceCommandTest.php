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
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionInstanceCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\DeleteTimedActionInstanceCommandHandler;
use CachetHQ\Cachet\Models\TimedActionInstance;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the delete timed action instance command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTimedActionInstanceCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'instance' => new TimedActionInstance(),
        ];

        $object = new DeleteTimedActionInstanceCommand(
            $params['instance']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return DeleteTimedActionInstanceCommandHandler::class;
    }
}
