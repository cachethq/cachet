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

    /**
     * @before
     */
    public function letUserBeLoggedIn()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->be($user);
    }

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

    public function testPostComponentAuthorizedNoData()
    {
        $this->actingAs($this->user)->post('/api/v1/components')->seeJson(['Hello']);
    }
}
