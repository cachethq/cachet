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
        $this->seeJson(['id' => $components[0]->id]);
        $this->seeJson(['id' => $components[1]->id]);
        $this->seeJson(['id' => $components[2]->id]);
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
        $this->seeJson(['name' => 'Foo']);
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
        $this->seeJson(['name' => 'Foo', 'enabled' => true]);
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
        $this->seeJson(['name' => 'Foo', 'enabled' => false]);
        $this->assertResponseOk();
    }

    public function testGetNewComponent()
    {
        $component = factory('CachetHQ\Cachet\Models\Component')->create();

        $this->get('/api/v1/components/1');
        $this->seeJson(['name' => $component->name]);
        $this->assertResponseOk();
    }

    public function testPutComponent()
    {
        $this->beUser();
        $component = factory('CachetHQ\Cachet\Models\Component')->create();

        $this->put('/api/v1/components/1', [
            'name' => 'Foo',
        ]);
        $this->seeJson(['name' => 'Foo']);
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
