<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MetricTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testGetMetrics()
    {
        $this->get('/api/v1/metrics')->seeJson(['data' => []]);
    }
}
