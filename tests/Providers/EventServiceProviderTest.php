<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Providers;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
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
    use ServiceProviderTrait;

    protected function getServiceProviderClass()
    {
        $split = explode('\\', (new ReflectionClass($this))->getName());
        $class = substr(end($split), 0, -4);

        return "{$split[0]}\\{$split[2]}\\Providers\\{$class}";
    }

    public function testIsAnEventServiceProvider()
    {

        $class = $this->getServiceProviderClass();

        $reflection = new ReflectionClass($class);

        $provider = new ReflectionClass(ServiceProvider::class);

        $msg = "Expected class '$class' to be a service provider.";

        $this->assertTrue($reflection->isSubclassOf($provider), $msg);
    }
}
