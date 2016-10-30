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
 * This is the incident update test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentUpdateTest extends AbstractApiTestCase
{
    public function testGetIncidentUpdates()
    {
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();
        $updates = factory('CachetHQ\Cachet\Models\IncidentUpdate', 3)->create([
            'incident_id' => $incident->id,
        ]);

        $this->get("/api/v1/incidents/{$incident->id}/updates");

        $this->assertResponseOk();

        $this->seeJson(['id' => $updates[0]->id]);
        $this->seeJson(['id' => $updates[1]->id]);
        $this->seeJson(['id' => $updates[2]->id]);
    }

    public function testGetInvalidIncidentUpdate()
    {
        $this->get('/api/v1/incidents/1/updates/1');

        $this->assertResponseStatus(404);
    }

    public function testPostIncidentUpdateUnauthorized()
    {
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();
        $this->post("/api/v1/incidents/{$incident->id}/updates");

        $this->assertResponseStatus(401);
    }

    public function testPostIncidentUpdateNoData()
    {
        $this->beUser();
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();

        $this->post("/api/v1/incidents/{$incident->id}/updates");

        $this->assertResponseStatus(400);
    }

    public function testPostIncidentUpdate()
    {
        $this->beUser();
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();

        $this->post("/api/v1/incidents/{$incident->id}/updates", [
            'status'  => 4,
            'message' => 'Incident fixed!',
        ]);

        $this->assertResponseOk();

        $this->seeJson(['incident_id' => $incident->id]);
    }

    public function testPutIncidentUpdate()
    {
        $this->beUser();
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();
        $update = factory('CachetHQ\Cachet\Models\IncidentUpdate')->create();

        $this->put("/api/v1/incidents/{$incident->id}/updates/{$update->id}", [
            'message' => 'Message updated :smile:',
        ]);

        $this->assertResponseOk();

        $this->seeJson(['message' => 'Message updated :smile:']);
    }

    public function testDeleteIncidentUpdate()
    {
        $this->beUser();
        $incident = factory('CachetHQ\Cachet\Models\Incident')->create();
        $update = factory('CachetHQ\Cachet\Models\IncidentUpdate')->create();

        $this->delete("/api/v1/incidents/{$incident->id}/updates/{$update->id}");

        $this->assertResponseStatus(204);
    }
}
