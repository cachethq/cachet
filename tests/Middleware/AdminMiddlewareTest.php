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

class AdminMiddlewareTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testNormalUser()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();
        $user->level = 0; // We model admin users.
        $this->be($user);

        $component = factory('CachetHQ\Cachet\Models\Component')->create();
        $this->post('/api/v1/components', $component->toArray());
        $this->assertResponseOk();
    }

    public function testAdminUser()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->be($user);

        $component = factory('CachetHQ\Cachet\Models\Component')->create();
        $this->post('/api/v1/components', $component->toArray());
        $this->assertResponseOk();
    }
}
