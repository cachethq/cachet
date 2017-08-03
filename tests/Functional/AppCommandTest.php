<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Functional;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Contracts\Console\Kernel;

/**
 * This is the app command test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class AppCommandTest extends AbstractTestCase
{
    public function testInstall()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('app:install'));
    }

    public function testReset()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('app:reset'));
    }

    public function testUpdate()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('app:reset'));
    }
}
