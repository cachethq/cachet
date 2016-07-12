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
use CachetHQ\Cachet\Integrations\Contracts\System;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the integration service provider test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IntegrationServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSystemIsInjectable()
    {
        $this->assertIsInjectable(System::class);
    }
}
