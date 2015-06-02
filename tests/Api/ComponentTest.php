<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ComponentTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testGetComponents()
    {
        $this->get('/api/v1/components')->seeJson(['data' => []]);
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
        $this->user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->be($this->user);

        $this->post('/api/v1/components');
        $this->assertResponseStatus(400);
    }

    public function testPostComponent()
    {
        $this->user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->be($this->user);

        $this->post('/api/v1/components', [
            'name'        => 'Foo',
            'description' => 'Bar',
            'status'      => 1,
            'link'        => 'http://example.com',
            'order'       => 1,
            'group_id'    => 1,
        ])->seeJson(['name' => 'Foo']);
    }

    public function testGetNewComponent()
    {
        $this->user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->be($this->user);

        $this->get('/api/v1/components/1')->seeJson(['name' => 'Foo']);
    }
}
