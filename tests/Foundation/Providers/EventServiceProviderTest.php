<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Foundation\Providers;

use AltThree\TestBench\EventServiceProviderTrait;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Support\ServiceProvider;
use ReflectionClass;

/**
 * This is the event service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class EventServiceProviderTest extends AbstractTestCase
{
    use EventServiceProviderTrait;

    public function testIsAnEventServiceProvider()
    {
        $class = $this->getServiceProviderClass($this->app);

        $reflection = new ReflectionClass($class);

        $provider = new ReflectionClass(ServiceProvider::class);

        $msg = "Expected class '$class' to be a service provider.";

        $this->assertTrue($reflection->isSubclassOf($provider), $msg);
    }
}
