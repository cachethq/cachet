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

use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\User;

/**
 * This is the API authentication test class.
 *
 * @author Erik Anders <github@naugrim.org>
 */
class AuthenticationTest extends AbstractApiTestCase
{
    const API_KEY = '123456789abcdefg';
    const SUBSCRIBER_EMAIL = 'test.subscriber@example.com';

    public function test_can_authenticate_using_x_cachet_token_header()
    {
        factory(User::class)
            ->create(['api_key' => self::API_KEY]);

        factory(Subscriber::class)->create([
            'email' => self::SUBSCRIBER_EMAIL,
        ]);

        $response = $this->withHeaders([
                'X-Cachet-Token' => self::API_KEY,
            ])
            ->json('GET', '/api/v1/subscribers');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'email' => self::SUBSCRIBER_EMAIL,
        ]);
    }

    public function test_can_authenticate_using_authorization_header()
    {
        factory(User::class)
            ->create(['api_key' => self::API_KEY]);

        factory(Subscriber::class)->create([
            'email' => self::SUBSCRIBER_EMAIL,
        ]);

        $response = $this->withHeaders([
                'Authorization' => 'Bearer '.self::API_KEY,
            ])
            ->json('GET', '/api/v1/subscribers');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'email' => self::SUBSCRIBER_EMAIL,
        ]);
    }
}
