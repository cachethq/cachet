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
 * This is the incident test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class IncidentTest extends AbstractApiTestCase
{
    public function testGetIncidents()
    {
        $incidents = factory('CachetHQ\Cachet\Models\Incident', 3)->create();

        $this->get('/api/v1/incidents');
        $this->seeJson(['id' => $incidents[0]->id]);
        $this->seeJson(['id' => $incidents[1]->id]);
        $this->seeJson(['id' => $incidents[2]->id]);
        $this->assertResponseOk();
    }

    public function testGetInvalidIncident()
    {
        $this->get('/api/v1/incidents/0');
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
            'name'     => 'Foo',
            'message'  => 'Lorem ipsum dolor sit amet',
            'status'   => 1,
            'visible'  => 1,
            'stickied' => false,
        ]);
        $this->seeJson(['name' => 'Foo']);
        $this->assertResponseOk();
    }

    public function testPostIncidentWithComponentStatus()
    {
        $component = factory('CachetHQ\Cachet\Models\Component')->create();

        $this->beUser();

        $this->post('/api/v1/incidents', [
            'name'             => 'Foo',
            'message'          => 'Lorem ipsum dolor sit amet',
            'status'           => 1,
            'component_id'     => $component->id,
            'component_status' => 1,
            'visible'          => 1,
            'stickied'         => false,
        ]);
        $this->seeJson(['name' => 'Foo']);
        $this->assertResponseOk();
    }

    public function testCreateIncidentWithTemplate()
    {
        $template = factory('CachetHQ\Cachet\Models\IncidentTemplate')->create();
        $this->beUser();

        $this->post('/api/v1/incidents', [
            'name'     => 'Foo',
            'status'   => 1,
            'visible'  => 1,
            'stickied' => false,
            'template' => $template->slug,
            'vars'     => [
                'name'    => 'Foo',
                'message' => 'Hello there this is a foo!',
            ],
        ]);
        $this->seeJson([
            'name'    => 'Foo',
            'message' => "Name: Foo,\nMessage: Hello there this is a foo!",
        ]);
    }

    public function testGetNewIncident()
    {
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();

        $this->get('/api/v1/incidents/1');
        $this->seeJson(['name' => $incident->name]);
        $this->assertResponseOk();
    }

    public function testPutIncident()
    {
        $this->beUser();
        $component = factory('CachetHQ\Cachet\Models\Incident')->create();

        $this->put('/api/v1/incidents/1', [
            'name' => 'Foo',
        ]);
        $this->seeJson(['name' => 'Foo']);
        $this->assertResponseOk();
    }

    public function testPutIncidentWithTemplate()
    {
        $this->beUser();
        $template = factory('CachetHQ\Cachet\Models\IncidentTemplate')->create([
            'template' => 'Hello there this is a foo in my {{ incident.name }}!',
        ]);
        $component = factory('CachetHQ\Cachet\Models\Incident')->create();

        $this->put('/api/v1/incidents/1', [
            'name'     => 'Foo',
            'template' => $template->slug,
        ]);
        $this->seeJson([
            'name'    => 'Foo',
            'message' => 'Hello there this is a foo in my Foo!',
        ]);
        $this->assertResponseOk();
    }

    public function testDeleteIncident()
    {
        $this->beUser();
        $component = factory('CachetHQ\Cachet\Models\Incident')->create();

        $this->delete('/api/v1/incidents/1');
        $this->assertResponseStatus(204);
    }
}
