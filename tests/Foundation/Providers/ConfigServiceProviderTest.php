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

use AltThree\TestBench\ServiceProviderTrait;
use CachetHQ\Cachet\Settings\Cache;
use CachetHQ\Cachet\Settings\Repository;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the config service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ConfigServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testCacheIsInjectable()
    {
        $this->assertIsInjectable(Cache::class);
    }

    public function testRepositoryIsInjectable()
    {
        $this->assertIsInjectable(Repository::class);
    }
}
