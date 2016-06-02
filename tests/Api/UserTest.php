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
 * This is the user test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UserTest extends AbstractApiTestCase
{
    public function testCreateUser()
    {
        $this->beUser();

        $this->post('/api/v1/users', [
            'username' => 'Alt Three',
            'email'    => 'support@alt-three.com',
            'password' => 'AltTheeWinsLife',
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJson(['email' => 'support@alt-three.com']);
    }

    public function testUpdateUser()
    {
        $this->beUser();

        $user = factory('CachetHQ\Cachet\Models\User')->create();

        $this->put("/api/v1/users/{$user->id}", [
            'username' => 'jbrooksuk',
        ]);

        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJson(['username' => 'jbrooksuk']);
    }

    public function testDeleteUser()
    {
        $this->beUser();

        $user = factory('CachetHQ\Cachet\Models\User')->create();
        $this->delete("/api/v1/users/{$user->id}");
        $this->assertResponseStatus(204);
    }
}
