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
use App\Services\Dates\DateFactory;
use Tests\AbstractTestCase;

/**
 * This is the app service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class AppServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testDateFactoryIsInjectable()
    {
        $this->assertIsInjectable(DateFactory::class);
    }
}
