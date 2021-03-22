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

use CachetHQ\Cachet\Models\IncidentTemplate;

/**
 * This is the incident template test class.
 *
 * @author Marc Hagen <hello@marchagen.nl>
 */
class IncidentTemplateTest extends AbstractApiTestCase
{
    public function test_can_get_all_incident_templates()
    {
        $templates = factory(IncidentTemplate::class, 3)->create();

        $response = $this->json('GET', '/api/v1/incidents/templates');

        $response->assertJsonFragment(['id' => $templates[0]->id]);
        $response->assertJsonFragment(['id' => $templates[1]->id]);
        $response->assertJsonFragment(['id' => $templates[2]->id]);
        $response->assertStatus(200);
    }

    public function test_cannot_get_invalid_incident_template()
    {
        $response = $this->json('GET', '/api/v1/incidents/templates/1');

        $response->assertStatus(404);
    }
}
