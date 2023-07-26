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
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * This is the artisan command test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class ArtisanCommandTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testMigrations()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('migrate', ['--force' => true]));
    }

    public function testSeed()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('cachet:seed'));
    }

    public function testBeacon()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('cachet:beacon'));
    }

    public function testVersion()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('cachet:version'));
    }
}
