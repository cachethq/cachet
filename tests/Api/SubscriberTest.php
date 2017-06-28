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

use Illuminate\Support\Facades\Notification;

/**
 * This is the subscriber test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class SubscriberTest extends AbstractApiTestCase
{
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

        Notification::fake();

        $this->expectsEvents('CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasSubscribedEvent');

        $this->post('/api/v1/subscribers', [
            'email' => 'support@alt-three.com',
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJsonContains(['email' => 'support@alt-three.com']);
    }

    public function testCreateSubscriberAutoVerified()
    {
        $this->beUser();

        Notification::fake();

        $this->expectsEvents('CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasSubscribedEvent');

        $this->post('/api/v1/subscribers', [
            'email'  => 'support@alt-three.com',
            'verify' => true,
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJsonContains(['email' => 'support@alt-three.com']);
    }

    public function testCreateSubscriberWithSubscriptions()
    {
        $this->beUser();

        factory('CachetHQ\Cachet\Models\Component', 3)->create();

        $this->post('/api/v1/subscribers', [
            'email'         => 'support@alt-three.com',
            'verify'        => true,
            'subscriptions' => [
                1,
                2,
                3,
            ],
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJsonContains(['email' => 'support@alt-three.com']);
        $this->seeJsonStructure(['data' => ['subscriptions' => []]]);
    }

    public function testDeleteSubscriber()
    {
        $this->beUser();

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create();
        $this->delete("/api/v1/subscribers/{$subscriber->id}");
        $this->assertResponseStatus(204);
    }

    public function testDeleteSubscription()
    {
        $this->beUser();

        $subscription = factory('CachetHQ\Cachet\Models\Subscription')->create();
        $this->delete("/api/v1/subscriptions/{$subscription->id}");
        $this->assertResponseStatus(204);
    }
}
