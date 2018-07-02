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

use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasCreatedEvent;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasRemovedEvent;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasUpdatedEvent;
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

    public function test_can_get_all_component_groups()
    {
        $groups = factory(ComponentGroup::class, 2)
            ->create(['visible' => ComponentGroup::VISIBLE_GUEST]);

        $response = $this->json('GET', '/api/v1/components/groups');

        $response->assertStatus(200);
        $response->assertJsonFragment([
            [
                'id'                        => $groups[0]->id,
                'name'                      => $groups[0]->name,
                'created_at'                => (string) $groups[0]->created_at,
                'updated_at'                => (string) $groups[0]->updated_at,
                'order'                     => $groups[0]->order,
                'collapsed'                 => $groups[0]->collapsed,
                'visible'                   => $groups[0]->visible,
                'enabled_components'        => $groups[0]->enabled_components,
                'enabled_components_lowest' => $groups[0]->enabled_components_lowest,
                'lowest_human_status'       => $groups[0]->lowest_human_status,
            ],
        ]);
        $response->assertJsonFragment([
            [
                'id'                        => $groups[1]->id,
                'name'                      => $groups[1]->name,
                'created_at'                => (string) $groups[1]->created_at,
                'updated_at'                => (string) $groups[1]->updated_at,
                'order'                     => $groups[1]->order,
                'collapsed'                 => $groups[1]->collapsed,
                'visible'                   => $groups[1]->visible,
                'enabled_components'        => $groups[1]->enabled_components,
                'enabled_components_lowest' => $groups[1]->enabled_components_lowest,
                'lowest_human_status'       => $groups[1]->lowest_human_status,
            ],
        ]);
    }

    public function test_cannot_get_invalid_component_group()
    {
        $response = $this->json('GET', '/api/v1/components/groups/1');

        $response->assertStatus(404);
    }

    public function test_cannot_create_component_group_without_authorization()
    {
        $this->doesntExpectEvents(ComponentGroupWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components/groups');

        $response->assertStatus(401);
    }

    public function test_cannot_create_component_group_without_data()
    {
        $this->beUser();

        $this->doesntExpectEvents(ComponentGroupWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components/groups');

        $response->assertStatus(400);
    }

    public function test_can_create_new_component_group()
    {
        $this->beUser();

        $this->expectsEvents(ComponentGroupWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components/groups', [
            'name'      => 'Foo',
            'order'     => 1,
            'collapsed' => 1,
            'visible'   => ComponentGroup::VISIBLE_GUEST,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'name'      => 'Foo',
            'order'     => 1,
            'collapsed' => 1,
            'visible'   => ComponentGroup::VISIBLE_GUEST,
        ]);
    }

    public function test_can_get_single_component_group()
    {
        $group = factory(ComponentGroup::class)->create();

        $response = $this->json('GET', '/api/v1/components/groups/1');

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $group->name]);
    }

    public function test_can_update_component_group()
    {
        $this->beUser();
        $group = factory(ComponentGroup::class)->create();

        $this->expectsEvents(ComponentGroupWasUpdatedEvent::class);

        $response = $this->json('PUT', '/api/v1/components/groups/1', [
            'name' => 'Lorem Ipsum Groupous',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Lorem Ipsum Groupous']);
    }

    public function test_can_delete_component_group()
    {
        $this->beUser();
        $group = factory(ComponentGroup::class)->create();

        $this->expectsEvents(ComponentGroupWasRemovedEvent::class);

        $response = $this->json('DELETE', '/api/v1/components/groups/1');

        $response->assertStatus(204);
    }

    public function test_only_public_component_groups_are_shown_for_a_guest()
    {
        $this->createComponentGroups();

        $response = $this->json('GET', '/api/v1/components/groups');

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => self::COMPONENT_GROUP_1_NAME]);
    }

    public function test_all_component_groups_are_displayed_for_logged_in_users()
    {
        $this->createComponentGroups()
            ->signIn();

        $response = $this->json('GET', '/api/v1/components/groups');

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => self::COMPONENT_GROUP_1_NAME]);
    }

    /**
     * Set up the needed data for the tests.
     *
     * @return $this
     */
    protected function createComponentGroups()
    {
        $this->createComponentGroup(self::COMPONENT_GROUP_1_NAME, ComponentGroup::VISIBLE_GUEST)
            ->createComponentGroup(self::COMPONENT_GROUP_2_NAME, ComponentGroup::VISIBLE_AUTHENTICATED);

        return $this;
    }

    /**
     * Create a component group.
     *
     * Also attaches a creator if any given as a parameter or exists in the test class.
     *
     * @param string $name
     * @param string $visible
     *
     * @return $this
     */
    protected function createComponentGroup($name, $visible)
    {
        factory(ComponentGroup::class)
            ->create(['name' => $name, 'visible' => $visible]);

        return $this;
    }
}
