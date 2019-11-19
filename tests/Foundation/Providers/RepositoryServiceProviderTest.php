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
use App\Repositories\Metric\MetricRepository;
use Tests\AbstractTestCase;

/**
 * This is the repository service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class RepositoryServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testMetricRepositoryIsInjectable()
    {
        $this->assertIsInjectable(MetricRepository::class);
    }
}
