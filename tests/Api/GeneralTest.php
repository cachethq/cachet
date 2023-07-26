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

use CachetHQ\Cachet\Models\Component;

/**
 * This is the general test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class GeneralTest extends AbstractApiTestCase
{
    public function test_can_ping()
    {
        $response = $this->json('GET', '/api/v1/ping');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/json');
        $response->assertJsonFragment(['data' => 'Pong!']);
    }

    public function test_see_error_page_for_unknown_endpoint()
    {
        $response = $this->json('GET', '/api/v1/not-found');

        $response->assertStatus(404);
        $response->assertHeader('Content-Type', 'application/json');
    }

    public function test_non_acceptable_content_type()
    {
        $response = $this->json('GET', '/api/v1/ping', [], ['HTTP_Accept' => 'text/html']);

        $response->assertStatus(406);
    }

    public function test_can_get_system_status()
    {
        $response = $this->json('GET', '/api/v1/status');

        $response->assertStatus(200)
                 ->assertHeader('Cache-Control')
                 ->assertJsonFragment([
                     'data' => [
                         'status'  => 'success',
                         'message' => 'System operational',
                     ],
                 ]);
    }

    public function test_can_get_system_status_not_success()
    {
        factory(Component::class)->create([
            'status' => 3,
        ]);

        $response = $this->json('GET', '/api/v1/status');

        $response->assertStatus(200)
                 ->assertHeader('Cache-Control')
                 ->assertJsonFragment([
                     'data' => [
                         'status'  => 'info',
                         'message' => 'The system is experiencing issues',
                     ],
                 ]);
    }
}
