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

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;

/**
 * This is the component group test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class ComponentGroupTest extends AbstractApiTestCase
{
    const COMPONENT_GROUP_1_NAME = 'Component Group 1';
    const COMPONENT_GROUP_2_NAME = 'Component Group 2';

    public function testGetGroups()
    {
        $groups = factory('CachetHQ\Cachet\Models\ComponentGroup', 3)
            ->create(['visible' => ComponentGroup::VISIBLE_GUEST]);

        $this->get('/api/v1/components/groups');
        $this->seeJsonContains(['id' => $groups[0]->id]);
        $this->seeJsonContains(['id' => $groups[1]->id]);
        $this->seeJsonContains(['id' => $groups[2]->id]);
        $this->assertResponseOk();
    }

    public function testGetInvalidGroup()
    {
        $this->get('/api/v1/components/groups/1');
        $this->assertResponseStatus(404);
    }

    public function testPostGroupUnauthorized()
    {
        $this->post('/api/v1/components/groups');

        $this->assertResponseStatus(401);
    }

    public function testPostGroupNoData()
    {
        $this->beUser();

        $this->post('/api/v1/components/groups');
        $this->assertResponseStatus(400);
    }

    public function testPostGroup()
    {
        $this->beUser();

        $this->post('/api/v1/components/groups', [
            'name'      => 'Foo',
            'order'     => 1,
            'collapsed' => 1,
            'visible'   => ComponentGroup::VISIBLE_GUEST,
        ]);
        $this->seeJsonContains(['name' => 'Foo', 'order' => 1, 'collapsed' => 1, 'visible' => ComponentGroup::VISIBLE_GUEST]);
        $this->assertResponseOk();
    }

    public function testGetNewGroup()
    {
        $group = factory('CachetHQ\Cachet\Models\ComponentGroup')->create();

        $this->get('/api/v1/components/groups/1');
        $this->seeJsonContains(['name' => $group->name]);
        $this->assertResponseOk();
    }

    public function testPutGroup()
    {
        $this->beUser();
        $group = factory('CachetHQ\Cachet\Models\ComponentGroup')->create();

        $this->put('/api/v1/components/groups/1', [
            'name' => 'Lorem Ipsum Groupous',
        ]);
        $this->seeJsonContains(['name' => 'Lorem Ipsum Groupous']);
        $this->assertResponseOk();
    }

    public function testDeleteGroup()
    {
        $this->beUser();
        $group = factory('CachetHQ\Cachet\Models\ComponentGroup')->create();

        $this->delete('/api/v1/components/groups/1');
        $this->assertResponseStatus(204);
    }

    /** @test */
    public function only_public_component_groups_are_shown_for_a_guest()
    {
        $this->createComponentGroups();

        $this->get('/api/v1/components/groups')
            ->seeJsonContains(['name' => self::COMPONENT_GROUP_1_NAME]);
        $this->assertResponseOk();
    }

    /** @test */
    public function all_component_groups_are_displayed_for_loggedin_users()
    {
        $this->createComponentGroups()
            ->signIn();

        $this->get('/api/v1/components/groups')
            ->seeJsonContains(['name' => self::COMPONENT_GROUP_1_NAME])
            ->seeJsonContains(['name' => self::COMPONENT_GROUP_2_NAME]);
        $this->assertResponseOk();
    }

    /**
     * Set up the needed data for the tests.
     *
     * @return TestCase
     */
    protected function createComponentGroups()
    {
        $this->createComponentGroup(self::COMPONENT_GROUP_1_NAME, ComponentGroup::VISIBLE_GUEST)
            ->createComponentGroup(self::COMPONENT_GROUP_2_NAME, ComponentGroup::VISIBLE_AUTHENTICATED);

        return $this;
    }

    /**
     * Create a component group.
     * Also attaches a creator if any given as a parameter
     * or exists in the test class.
     *
     * @param string $name
     * @param string $visible
     *
     * @return AbstractApiTestCase
     */
    protected function createComponentGroup($name, $visible)
    {
        factory(ComponentGroup::class)
            ->create(['name' => $name, 'visible' => $visible]);

        return $this;
    }
}
