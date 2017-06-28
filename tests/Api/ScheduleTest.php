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

/**
 * This is the schedule test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ScheduleTest extends AbstractApiTestCase
{
    public function testGetSchedules()
    {
        $schedules = factory('CachetHQ\Cachet\Models\Schedule', 3)->create();

        $this->get('/api/v1/schedules');

        $this->assertResponseOk();

        $this->seeJsonContains(['id' => $schedules[0]->id]);
        $this->seeJsonContains(['id' => $schedules[1]->id]);
        $this->seeJsonContains(['id' => $schedules[2]->id]);
    }

    public function testGetSchedule()
    {
        $schedule = factory('CachetHQ\Cachet\Models\Schedule')->create();

        $this->get('/api/v1/schedules/'.$schedule->id);

        $this->assertResponseOk();

        $this->seeJsonContains(['name' => $schedule->name]);
    }

    public function testCreateSchedule()
    {
        $this->beUser();

        $schedule = [
            'name'         => 'Test Schedule',
            'message'      => 'Foo bar, baz.',
            'status'       => 1,
            'scheduled_at' => date('Y-m-d H:i'),
        ];

        $this->post('/api/v1/schedules/', $schedule);

        array_forget($schedule, 'scheduled_at');

        $this->assertResponseOk();
        $this->seeJsonContains($schedule);
    }

    public function testUpdateSchedule()
    {
        $this->beUser();

        $schedule = factory('CachetHQ\Cachet\Models\Schedule')->create();

        $this->put('/api/v1/schedules/'.$schedule->id, [
            'name' => 'Updated schedule',
        ]);

        $this->assertResponseOk();

        $this->seeJsonContains(['name' => 'Updated schedule']);
    }

    public function testDeleteSchedule()
    {
        $this->beUser();
        factory('CachetHQ\Cachet\Models\Schedule')->create();

        $this->delete('/api/v1/schedules/1');

        $this->assertResponseStatus(204);
    }
}
