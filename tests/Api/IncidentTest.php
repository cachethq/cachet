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

class IncidentTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testGetIncidents()
    {
        $this->get('/api/v1/incidents')->seeJson(['data' => []]);
    }

    public function testGetInvalidIncident()
    {
        $this->get('/api/v1/incidents/1');
        $this->assertResponseStatus(404);
    }

    public function testPostIncidentUnauthorized()
    {
        $this->post('/api/v1/incidents');
        $this->assertResponseStatus(401);
    }

    public function testPostIncidentNoData()
    {
        $this->beUser();

        $this->post('/api/v1/incidents');
        $this->assertResponseStatus(400);
    }

    public function testPostIncident()
    {
        $this->beUser();

        $this->post('/api/v1/incidents', [
            'name'    => 'Foo',
            'message' => 'Lorem ipsum dolor sit amet',
            'status'  => 1,
        ]);
        $this->seeJson(['name' => 'Foo']);
    }
}
