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

use AltThree\TestBench\ServiceProviderTrait;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use CachetHQ\Tests\Cachet\ServiceProviderTestCase;
use GrahamCampbell\TestBenchCore\LaravelTrait;

/**
 * This is the repository service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class RepositoryServiceProviderTest extends ServiceProviderTestCase
{
    use LaravelTrait;

    public function testMetricRepositoryIsInjectable()
    {
        $this->assertIsInjectable(MetricRepository::class);
    }
}
