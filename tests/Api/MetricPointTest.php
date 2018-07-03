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
use CachetHQ\Cachet\Models\MetricPoint;
use Carbon\Carbon;

/**
 * This is the metric point test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class MetricPointTest extends AbstractApiTestCase
{
    public function test_can_get_all_metric_points()
    {
        $metric = factory(Metric::class)->create();
        $metricPoint = factory(MetricPoint::class, 3)->create([
            'metric_id' => $metric->id,
        ]);

        $response = $this->json('GET', "/api/v1/metrics/{$metric->id}/points");

        $response->assertJsonFragment(['id' => $metricPoint[0]->id]);
        $response->assertJsonFragment(['id' => $metricPoint[1]->id]);
        $response->assertJsonFragment(['id' => $metricPoint[2]->id]);

        $response->assertStatus(200);
    }

    public function test_can_get_all_metric_points_in_order_by_latests()
    {
        $metric = factory(Metric::class)->create();
        $metricPoint1 = factory(MetricPoint::class)->create([
            'metric_id'  => $metric->id,
            'created_at' => Carbon::parse('2016-12-01 2:00pm'),
            'updated_at' => Carbon::parse('2016-12-01 2:00pm'),
        ]);
        $metricPoint2 = factory(MetricPoint::class)->create([
            'metric_id'  => $metric->id,
            'created_at' => Carbon::parse('2016-12-01 1:00pm'),
            'updated_at' => Carbon::parse('2016-12-01 1:00pm'),
        ]);
        $metricPoint3 = factory(MetricPoint::class)->create([
            'metric_id'  => $metric->id,
            'created_at' => Carbon::parse('2016-12-01 4:00pm'),
            'updated_at' => Carbon::parse('2016-12-01 4:00pm'),
        ]);

        $response = $this->json('GET', "/api/v1/metrics/{$metric->id}/points");

        $response->assertJson([
            'data' => [
                ['id' => $metricPoint3->id],
                ['id' => $metricPoint1->id],
                ['id' => $metricPoint2->id],
            ],
        ]);

        $response->assertStatus(200);
    }

    public function test_cannot_create_metric_point_without_authorization()
    {
        $metric = factory(Metric::class)->create();
        $metricPoint = factory(MetricPoint::class)->create([
            'metric_id' => $metric->id,
        ]);
        $response = $this->json('POST', "/api/v1/metrics/{$metric->id}/points");

        $response->assertStatus(401);
    }

    public function test_can_create_metric_point()
    {
        $this->beUser();

        $metric = factory(Metric::class)->create();
        $metricPoint = factory(MetricPoint::class)->make([
            'metric_id' => $metric->id,
        ]);

        $response = $this->json('POST', "/api/v1/metrics/{$metric->id}/points", $metricPoint->toArray());
        $response->assertStatus(200);
        $response->assertJsonFragment(['value' => $metricPoint->value]);
    }

    public function test_can_create_metric_point_with_timestamp()
    {
        $this->beUser();

        // prevent tests breaking due to rolling into the next second
        Carbon::setTestNow(Carbon::now());

        $metric = factory(Metric::class)->create();
        $createdAt = Carbon::now();
        $metricPoint = factory(MetricPoint::class)->make([
            'metric_id' => $metric->id,
        ]);
        $postData = $metricPoint->toArray();
        $postData['timestamp'] = $createdAt->timestamp;

        $response = $this->json('POST', "/api/v1/metrics/{$metric->id}/points", $postData);

        // Round value to match ours
        $timestamp = 30 * round($createdAt->timestamp / 30);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'value'      => $metricPoint->value,
            'created_at' => Carbon::createFromFormat('U', $timestamp)->setTimezone(config('cachet.timezone'))->toDateTimeString(),
        ]);
    }

    public function test_can_create_metric_point_with_timestamp_timezone()
    {
        $this->beUser();

        // prevent tests breaking due to rolling into the next second
        Carbon::setTestNow(Carbon::now());

        $timezone = 'America/Mexico_City';
        $metric = factory(Metric::class)->create();
        $createdAt = Carbon::now()->timezone($timezone);
        $metricPoint = factory(MetricPoint::class)->make([
            'metric_id' => $metric->id,
        ]);
        $postData = $metricPoint->toArray();
        $postData['timestamp'] = $createdAt->timestamp;

        $response = $this->json('POST', "/api/v1/metrics/{$metric->id}/points", $postData, ['Time-Zone' => $timezone]);

        // Round value to match ours
        $timestamp = 30 * round($createdAt->timestamp / 30);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'value'      => $metricPoint->value,
            'created_at' => Carbon::createFromFormat('U', $timestamp)->setTimezone($timezone)->toDateTimeString(),
        ]);
    }

    public function test_can_update_metric_point()
    {
        $this->beUser();
        $metric = factory(Metric::class)->create();
        $metricPoint = factory(MetricPoint::class)->create([
            'metric_id' => $metric->id,
        ]);

        $response = $this->json('PUT', "/api/v1/metrics/{$metric->id}/points/{$metricPoint->id}", [
            'value' => 999,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['value' => 999]);
    }

    public function test_can_delete_metric_point()
    {
        $this->beUser();
        $metric = factory(Metric::class)->create();
        $metricPoint = factory(MetricPoint::class)->create([
            'metric_id' => $metric->id,
        ]);

        $response = $this->json('DELETE', "/api/v1/metrics/{$metric->id}/points/{$metricPoint->id}");

        $response->assertStatus(204);
    }
}
