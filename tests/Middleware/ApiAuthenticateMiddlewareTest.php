<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Middleware;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ApiAuthenticateMiddlewareTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testWithoutToken()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();

        $component = factory('CachetHQ\Cachet\Models\Component')->create();
        $this->post('/api/v1/components', $component->toArray());
        $this->assertResponseStatus(401);
    }

    public function testWithToken()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();

        $component = factory('CachetHQ\Cachet\Models\Component')->create();
        $this->post('/api/v1/components', $component->toArray(), [
            'X-Cachet-Token' => $user->api_key,
        ]);
        $this->assertResponseOk();
    }

    public function testWithoutTokenAsUser()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->be($user);

        $component = factory('CachetHQ\Cachet\Models\Component')->create();
        $this->post('/api/v1/components', $component->toArray());
        $this->assertResponseOk();
    }
}
