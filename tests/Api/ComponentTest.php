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

use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasChangedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasCreatedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasRemovedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;

/**
 * This is the component test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class ComponentTest extends AbstractApiTestCase
{
    public function test_can_get_all_components()
    {
        $components = factory(Component::class, 3)->create();

        $response = $this->json('GET', '/api/v1/components');

        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $components[0]->id]);
        $response->assertJsonFragment(['id' => $components[1]->id]);
        $response->assertJsonFragment(['id' => $components[2]->id]);
    }

    public function test_can_get_all_components_with_tags()
    {
        $components = factory(Component::class, 2)->create();
        $components[0]->attachTags(['Hello World']);
        $components[1]->attachTags(['Foo', 'Bar']);

        $response = $this->json('GET', '/api/v1/components', ['tags' => ['foo']]);

        $response->assertStatus(200);
        $response->assertJsonMissing(['id' => $components[0]->id]);
        $response->assertJsonFragment(['id' => $components[1]->id]);
    }

    public function test_cannot_get_invalid_component()
    {
        $response = $this->json('GET', '/api/v1/components/1');

        $response->assertStatus(404);
    }

    public function test_cannot_create_component_without_authorization()
    {
        $this->doesntExpectEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components');

        $response->assertStatus(401);
    }

    public function test_cannot_create_component_without_data()
    {
        $this->beUser();

        $this->doesntExpectEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components');

        $response->assertStatus(400);
    }

    public function test_can_create_component()
    {
        $this->beUser();

        $this->expectsEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
            'enabled'     => true,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo']);
    }

    public function test_can_create_minimal_component()
    {
        $this->beUser();

        $this->expectsEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components', [
            'name'        => 'Foo',
            'status'      => 1,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo']);
    }

    public function test_can_create_component_with_tags()
    {
        $this->beUser();

        $this->expectsEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
            'enabled'     => true,
            'tags'        => 'Foo,Bar',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'tags' => ['foo' => 'Foo', 'bar' => 'Bar']]);
    }

    public function test_can_create_component_without_enabled_field()
    {
        $this->beUser();

        $this->expectsEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'enabled' => true]);
    }

    public function test_can_create_component_with_meta_data()
    {
        $this->beUser();

        $this->expectsEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
            'enabled'     => true,
            'meta'        => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
            ],
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'name'   => 'Foo',
            'status' => 1,
            'meta'   => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
            ],
        ]);
    }

    public function test_can_create_disabled_component()
    {
        $this->beUser();

        $this->expectsEvents(ComponentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
            'enabled'     => 0,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'enabled' => false]);
    }

    public function test_can_get_newly_created_component()
    {
        $component = factory(Component::class)->create();

        $response = $this->json('GET', '/api/v1/components/1');

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $component->name]);
    }

    public function test_can_update_component()
    {
        $this->beUser();
        $component = factory(Component::class)->create();

        $this->expectsEvents(ComponentWasUpdatedEvent::class);

        $response = $this->json('PUT', '/api/v1/components/1', [
            'name' => 'Foo',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'enabled' => $component->enabled]);
    }

    public function test_can_update_component_tags()
    {
        $this->beUser();
        $component = factory(Component::class)->create();

        $this->expectsEvents(ComponentWasUpdatedEvent::class);

        $response = $this->json('PUT', '/api/v1/components/1', [
            'name' => 'Foo',
            'tags' => 'Hello',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'enabled' => $component->enabled, 'tags' => ['hello' => 'Hello']]);
    }

    public function test_can_update_component_without_status_change()
    {
        $this->beUser();
        $component = factory(Component::class)->create();

        $this->expectsEvents(ComponentWasUpdatedEvent::class);
        $this->doesntExpectEvents(ComponentStatusWasChangedEvent::class);

        $response = $this->json('PUT', '/api/v1/components/1', [
            'name' => 'Foo',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'enabled' => $component->enabled]);
    }

    public function test_can_update_component_with_status_change()
    {
        $this->beUser();
        $component = factory(Component::class)->create([
            'status' => 1,
        ]);

        $this->expectsEvents([
            ComponentWasUpdatedEvent::class,
            ComponentStatusWasChangedEvent::class,
        ]);

        $response = $this->json('PUT', '/api/v1/components/1', [
            'name'   => 'Foo',
            'status' => 2,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Foo', 'status' => 2, 'enabled' => $component->enabled]);
    }

    public function test_can_update_component_with_meta_data()
    {
        $this->beUser();
        $component = factory(Component::class)->create([
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
            ],
        ]);

        $this->expectsEvents(ComponentWasUpdatedEvent::class);

        $response = $this->json('PUT', '/api/v1/components/1', [
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
                'foo'  => 'bar',
            ],
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
                'foo'  => 'bar',
            ],
            'enabled' => $component->enabled,
        ]);
    }

    public function test_can_delete_component()
    {
        $this->beUser();
        $component = factory(Component::class)->create();

        $this->expectsEvents(ComponentWasRemovedEvent::class);

        $response = $this->json('DELETE', '/api/v1/components/1');
        $response->assertStatus(204);
    }
}
