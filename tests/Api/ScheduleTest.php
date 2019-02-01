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

use CachetHQ\Cachet\Models\Schedule;
use Illuminate\Support\Arr;

/**
 * This is the schedule test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ScheduleTest extends AbstractApiTestCase
{
    public function test_can_get_all_schedules()
    {
        $schedules = factory(Schedule::class, 3)->create();

        $response = $this->json('GET', '/api/v1/schedules');

        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $schedules[0]->id]);
        $response->assertJsonFragment(['id' => $schedules[1]->id]);
        $response->assertJsonFragment(['id' => $schedules[2]->id]);
    }

    public function test_can_get_single_schedule()
    {
        $schedule = factory(Schedule::class)->create();

        $response = $this->json('GET', '/api/v1/schedules/'.$schedule->id);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $schedule->name]);
    }

    public function test_can_create_schedule()
    {
        $this->beUser();

        $schedule = [
            'name'         => 'Test Schedule',
            'message'      => 'Foo bar, baz.',
            'status'       => 1,
            'scheduled_at' => date('Y-m-d H:i'),
        ];

        $response = $this->json('POST', '/api/v1/schedules/', $schedule);

        Arr::forget($schedule, 'scheduled_at');

        $response->assertStatus(200);
        $response->assertJsonFragment($schedule);
    }

    public function test_can_update_schedule()
    {
        $this->beUser();

        $schedule = factory(Schedule::class)->create();

        $response = $this->json('PUT', '/api/v1/schedules/'.$schedule->id, [
            'name' => 'Updated schedule',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Updated schedule']);
    }

    public function test_can_delete_schedule()
    {
        $this->beUser();
        factory(Schedule::class)->create();

        $response = $this->json('DELETE', '/api/v1/schedules/1');

        $response->assertStatus(204);
    }
}
