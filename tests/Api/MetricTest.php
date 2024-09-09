<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

use CachetHQ\Cachet\Models\Metric;

/**
 * This is the metric test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class MetricTest extends AbstractApiTestCase
{
    public function test_can_get_all_metrics()
    {
        $metrics = factory(Metric::class, 3)->create();

        $response = $this->json('GET', '/api/v1/metrics');

        $response->assertJsonFragment(['id' => $metrics[0]->id]);
        $response->assertJsonFragment(['id' => $metrics[1]->id]);
        $response->assertJsonFragment(['id' => $metrics[2]->id]);
        $response->assertStatus(200);
    }

    public function test_cannot_get_invalid_metric()
    {
        $response = $this->json('GET', '/api/v1/metrics/0');
        $response->assertStatus(404);
    }

    public function test_cannot_create_metric_without_authorization()
    {
        $response = $this->json('POST', '/api/v1/metrics');
        $response->assertStatus(401);
    }

    public function test_cannot_create_metric_without_data()
    {
        $this->beUser();

        $response = $this->json('POST', '/api/v1/metrics');
        $response->assertStatus(400);
    }

    public function test_can_create_metric()
    {
        $this->beUser();

        $response = $this->json('POST', '/api/v1/metrics', [
            'name'          => 'Foo',
            'suffix'        => 'foo\'s per second',
            'description'   => 'Lorem ipsum dolor',
            'default_value' => 1,
            'display_chart' => 1,
            'places'        => 0,
            'view'          => 0,
            'threshold'     => 5,
            'order'         => 1,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo']);
    }

    public function test_can_get_newly_created_metric()
    {
        $incident = factory(Metric::class)->create();

        $response = $this->json('GET', '/api/v1/metrics/1');

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $incident->name]);
    }

    public function test_can_update_metric()
    {
        $this->beUser();
        $metric = factory(Metric::class)->create();

        $response = $this->json('PUT', '/api/v1/metrics/1', [
            'name' => 'Foo',
            'view' => 2,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'default_view' => 2]);
    }

    public function test_can_delete_metric()
    {
        $this->beUser();
        $metric = factory(Metric::class)->create();

        $response = $this->json('DELETE', '/api/v1/metrics/1');

        $response->assertStatus(204);
    }
}
