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
 * This is the component test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class ComponentTest extends AbstractApiTestCase
{
    public function testGetComponents()
    {
        $components = factory('CachetHQ\Cachet\Models\Component', 3)->create();

        $this->get('/api/v1/components');
        $this->seeJsonContains(['id' => $components[0]->id]);
        $this->seeJsonContains(['id' => $components[1]->id]);
        $this->seeJsonContains(['id' => $components[2]->id]);
        $this->assertResponseOk();
    }

    public function testGetInvalidComponent()
    {
        $this->get('/api/v1/components/1');
        $this->assertResponseStatus(404);
    }

    public function testPostComponentUnauthorized()
    {
        $this->post('/api/v1/components');

        $this->assertResponseStatus(401);
    }

    public function testPostComponentNoData()
    {
        $this->beUser();

        $this->post('/api/v1/components');
        $this->assertResponseStatus(400);
    }

    public function testPostComponent()
    {
        $this->beUser();

        $this->post('/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
            'enabled'     => true,
        ]);
        $this->seeJsonContains(['name' => 'Foo']);
        $this->assertResponseOk();
    }

    public function testPostComponentWithoutEnabledField()
    {
        $this->beUser();

        $this->post('/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
        ]);
        $this->seeJsonContains(['name' => 'Foo', 'enabled' => true]);
        $this->assertResponseOk();
    }

    public function testPostComponentWithMetaData()
    {
        $this->beUser();

        $this->post('/api/v1/components', [
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

        $this->seeJsonContains([
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
            ],
        ]);
        $this->assertResponseOk();
    }

    public function testPostDisabledComponent()
    {
        $this->beUser();

        $this->post('/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
            'enabled'     => 0,
        ]);
        $this->seeJsonContains(['name' => 'Foo', 'enabled' => false]);
        $this->assertResponseOk();
    }

    public function testGetNewComponent()
    {
        $component = factory('CachetHQ\Cachet\Models\Component')->create();

        $this->get('/api/v1/components/1');
        $this->seeJsonContains(['name' => $component->name]);
        $this->assertResponseOk();
    }

    public function testPutComponent()
    {
        $this->beUser();
        $component = factory('CachetHQ\Cachet\Models\Component')->create();

        $this->put('/api/v1/components/1', [
            'name' => 'Foo',
        ]);
        $this->seeJsonContains(['name' => 'Foo']);
        $this->assertResponseOk();
    }

    public function testPutComponentWithMetaData()
    {
        $this->beUser();
        $component = factory('CachetHQ\Cachet\Models\Component')->create([
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
            ],
        ]);

        $this->put('/api/v1/components/1', [
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
                'foo'  => 'bar',
            ],
        ]);

        $this->seeJsonContains([
            'meta' => [
                'uuid' => '172ff3fb-41f7-49d3-8bcd-f57b53627fa0',
                'foo'  => 'bar',
            ],
        ]);
        $this->assertResponseOk();
    }

    public function testDeleteComponent()
    {
        $this->beUser();
        $component = factory('CachetHQ\Cachet\Models\Component')->create();

        $this->delete('/api/v1/components/1');
        $this->assertResponseStatus(204);
    }
}
