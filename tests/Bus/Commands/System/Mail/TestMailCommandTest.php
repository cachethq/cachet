<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\System\Mail;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\System\Mail\TestMailCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\System\Mail\TestMailCommandHandler;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the test mail command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TestMailCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new TestMailCommand($params['user']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return TestMailCommandHandler::class;
    }
}
