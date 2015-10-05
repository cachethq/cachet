<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands;

use CachetHQ\Tests\Cachet\AbstractAnemicTestCase;
use Illuminate\Contracts\Bus\Dispatcher;

/**
 * This is the abstract command test case class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
abstract class AbstractCommandTestCase extends AbstractAnemicTestCase
{
    public function testHandlerCanBeResolved()
    {
        $command = $this->getObjectAndParams()['object'];
        $dispatcher = $this->app->make(Dispatcher::class);

        $this->assertInstanceOf($this->getHandlerClass(), $dispatcher->resolveHandler($command));
    }
}
