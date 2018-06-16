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

use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;

/**
 * This is the incident update test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentUpdateTest extends AbstractApiTestCase
{
    public function test_can_get_all_incident_updates()
    {
        $incident = factory(Incident::class)->create();
        $updates = factory(IncidentUpdate::class, 3)->create([
            'incident_id' => $incident->id,
        ]);

        $response = $this->json('GET', "/api/v1/incidents/{$incident->id}/updates");

        $response->assertStatus(200);

        $response->assertJsonFragment(['id' => $updates[0]->id]);
        $response->assertJsonFragment(['id' => $updates[1]->id]);
        $response->assertJsonFragment(['id' => $updates[2]->id]);
    }

    public function test_cannot_get_invalid_incident_update()
    {
        $response = $this->json('GET', '/api/v1/incidents/1/updates/1');

        $response->assertStatus(404);
    }

    public function test_cannot_create_incident_update_without_authorization()
    {
        $incident = factory(Incident::class)->create();

        $response = $this->json('POST', "/api/v1/incidents/{$incident->id}/updates");

        $response->assertStatus(401);
    }

    public function test_cannot_create_incident_update_without_data()
    {
        $this->beUser();
        $incident = factory(Incident::class)->create();

        $response = $this->json('POST', "/api/v1/incidents/{$incident->id}/updates");

        $response->assertStatus(400);
    }

    public function test_can_create_incident_update()
    {
        $this->beUser();
        $incident = factory(Incident::class)->create();

        $response = $this->json('POST', "/api/v1/incidents/{$incident->id}/updates", [
            'status'  => 4,
            'message' => 'Incident fixed!',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['incident_id' => $incident->id]);
    }

    public function test_can_update_incident_update()
    {
        $this->beUser();
        $incident = factory(Incident::class)->create();
        $update = factory(IncidentUpdate::class)->create();

        $response = $this->json('PUT', "/api/v1/incidents/{$incident->id}/updates/{$update->id}", [
            'message' => 'Message updated :smile:',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['message' => 'Message updated :smile:']);
    }

    public function test_can_delete_incident_update()
    {
        $this->beUser();
        $incident = factory(Incident::class)->create();
        $update = factory(IncidentUpdate::class)->create();

        $response = $this->json('DELETE', "/api/v1/incidents/{$incident->id}/updates/{$update->id}");

        $response->assertStatus(204);
    }
}
