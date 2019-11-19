<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Foundation\Providers;

use AltThree\TestBench\ServiceProviderTrait;
use App\Integrations\Contracts\Beacon;
use App\Integrations\Contracts\Credits;
use App\Integrations\Contracts\Feed;
use App\Integrations\Contracts\Releases;
use App\Integrations\Contracts\System;
use Tests\AbstractTestCase;

/**
 * This is the integration service provider test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class IntegrationServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testBeaconIsInjectable()
    {
        $this->assertIsInjectable(Beacon::class);
    }

    public function testCreditsIsInjectable()
    {
        $this->assertIsInjectable(Credits::class);
    }

    public function testFeedIsInjectable()
    {
        $this->assertIsInjectable(Feed::class);
    }

    public function testSystemIsInjectable()
    {
        $this->assertIsInjectable(System::class);
    }

    public function testReleasesIsInjectable()
    {
        $this->assertIsInjectable(Releases::class);
    }
}
