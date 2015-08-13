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

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ComponentGroupTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testGetGroups()
    {
        $groups = factory('CachetHQ\Cachet\Models\ComponentGroup', 3)->create();

        $this->get('/api/v1/components/groups');
        $this->seeJson(['id' => (string) $groups[0]->id]);
        $this->seeJson(['id' => (string) $groups[1]->id]);
        $this->seeJson(['id' => (string) $groups[2]->id]);
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
            'name'  => 'Foo',
            'order' => 1,
        ]);
        $this->seeJson(['name' => 'Foo']);
        $this->assertResponseOk();
    }

    public function testGetNewGroup()
    {
        $group = factory('CachetHQ\Cachet\Models\ComponentGroup')->create();

        $this->get('/api/v1/components/groups/1');
        $this->seeJson(['name' => $group->name]);
        $this->assertResponseOk();
    }

    public function testPutGroup()
    {
        $this->beUser();
        $group = factory('CachetHQ\Cachet\Models\ComponentGroup')->create();

        $this->put('/api/v1/components/groups/1', [
            'name' => 'Lorem Ipsum Groupous',
        ]);
        $this->seeJson(['name' => 'Lorem Ipsum Groupous']);
        $this->assertResponseOk();
    }

    public function testDeleteGroup()
    {
        $this->beUser();
        $group = factory('CachetHQ\Cachet\Models\ComponentGroup')->create();

        $this->delete('/api/v1/components/groups/1');
        $this->assertResponseStatus(204);
    }
}
