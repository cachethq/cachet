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

use CachetHQ\Cachet\Models\TimedAction;
use CachetHQ\Cachet\Models\TimedActionInstance;
use Carbon\Carbon;

/**
 * This is the timed action test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionTest extends AbstractApiTestCase
{
    public function testGetActionsUnauthorized()
    {
        factory(TimedAction::class)->create();

        $this->get('/api/v1/actions');
        $this->assertResponseStatus(401);
    }

    public function testGetActions()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create();

        $this->get('/api/v1/actions');
        $this->seeJson($action->toArray());
    }

    public function testGetAction()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create();

        $this->get('/api/v1/actions/'.$action->id);
        $this->seeJson($action->toArray());
    }

    public function testGetActionInstances()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create();
        $instance = factory(TimedActionInstance::class)->create([
            'timed_action_id' => $action->id,
        ]);

        $this->get('/api/v1/actions/'.$action->id.'/instances');
        $this->seeJson($instance->toArray());
    }

    public function testGetActionInstance()
    {
        $this->beUser();

        $instance = factory(TimedActionInstance::class)->create();

        $this->get('/api/v1/actions/'.$instance->timed_action_id.'/instances/'.$instance->id);
        $this->seeJson($instance->toArray());
    }

    public function testPostAction()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->make([
            'timed_action_group_id' => null,
        ]);

        $this->post('/api/v1/actions/', $action->toArray());
        $this->seeJson($action->toArray());
    }

    public function testPostActionInstance()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create();
        $instance = factory(TimedActionInstance::class)->make([
            'timed_action_id' => $action->id,
        ]);

        $this->post('/api/v1/actions/'.$action->id.'/instances', $instance->toArray());
        $this->seeJson($instance->toArray());
    }

    public function testPostActionInstanceLate()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create();
        $action->update(['start_at' => Carbon::now()->subMinutes(40)]);
        $instance = factory(TimedActionInstance::class)->make([
            'timed_action_id' => $action->id,
        ]);

        $this->post('/api/v1/actions/'.$action->id.'/instances', $instance->toArray());
        $this->seeJson(array_merge($instance->toArray(), ['status' => TimedActionInstance::LATE]));
    }

    public function testPostActionInstanceNotStarted()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create();
        $action->update(['start_at' => Carbon::now()->addMinutes(10)]);
        $instance = factory(TimedActionInstance::class)->make([
            'timed_action_id' => $action->id,
        ]);

        $this->post('/api/v1/actions/'.$action->id.'/instances', $instance->toArray());
        $this->assertResponseStatus(400);
    }

    public function testPutAction()
    {
        $this->beUser();

        $action = factory(TimedAction::class)->create([
            'timed_action_group_id' => null,
        ]);

        $this->put('/api/v1/actions/'.$action->id, [
            'name' => 'Test',
        ]);
        $this->seeJson(['name' => 'Test']);
    }
}
