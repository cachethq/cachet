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

class MetricPointTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testPostMetricPointUnauthorized()
    {
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create();
        $this->post('/api/v1/metrics/1/points');

        $this->assertResponseStatus(401);
        $this->seeJson(['message' => 'You are not authorized to view this content.', 'status_code' => 401]);
    }

    public function testPostMetricPoint()
    {
        $this->beUser();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create();

        $this->post('/api/v1/metrics/1/points', $metricPoint->toArray());
        $this->seeJson(['value' => (string) $metricPoint->value]);
    }

    public function testPutMetricPoint()
    {
        $this->beUser();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create();
        $this->put('/api/v1/metrics/1/points/1', [
            'value' => 999,
        ]);
        $this->seeJson(['value' => '999']);
    }

    public function testDeleteMetricPoint()
    {
        $this->beUser();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create();
        $this->delete('/api/v1/metrics/1/points/1');
        $this->assertResponseStatus(204);
    }
}
