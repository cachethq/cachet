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

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
// use Illuminate\Foundation\Testing\WithoutEvents;

class SubscriberTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testGetSubscribersUnauthenticated()
    {
        $this->get('/api/v1/subscribers');
        $this->assertResponseStatus(401);
        $this->seeHeader('Content-Type', 'application/json');
    }

    public function testGetSubscribers()
    {
        $this->beUser();

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create();

        $this->get('/api/v1/subscribers');
        $this->seeHeader('Content-Type', 'application/json');
        $this->assertResponseOk();
    }

    public function testCreateSubscriber()
    {
        $this->beUser();

        $this->expectsEvents('CachetHQ\Cachet\Events\CustomerHasSubscribedEvent');

        $this->post('/api/v1/subscribers', [
            'email' => 'james@cachethq.io',
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJson(['email' => 'james@cachethq.io']);
    }

    public function testCreateSubscriberAutoVerified()
    {
        $this->beUser();

        $this->post('/api/v1/subscribers', [
            'email'  => 'james@cachethq.io',
            'verify' => true,
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJson(['email' => 'james@cachethq.io']);
    }

    public function testDeleteSubscriber()
    {
        $this->beUser();

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create();
        $this->delete("/api/v1/subscribers/{$subscriber->id}");
        $this->assertResponseStatus(204);
    }
}
