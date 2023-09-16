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

use CachetHQ\Cachet\Services\Dates\DateFactory;
use CachetHQ\Tests\Cachet\ServiceProviderTestCase;

/**
 * This is the app service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class AppServiceProviderTest extends ServiceProviderTestCase
{
    public function testDateFactoryIsInjectable()
    {
        $this->assertIsInjectable(DateFactory::class);
    }
}
