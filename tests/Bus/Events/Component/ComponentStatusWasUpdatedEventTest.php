<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Component;

use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use MailThief\Testing\InteractsWithMail;

/**
 * This is the component status was updated event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentStatusWasUpdatedEventTest extends AbstractComponentEventTestCase
{
    use DatabaseMigrations, InteractsWithMail;

    public function testComponentUpdateEmailWasSent()
    {
        $component = factory('CachetHQ\Cachet\Models\Component')->create([
            'status' => 2,
        ]);

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create([
            'verified_at' => '1970-01-01 00:00:00',
        ]);

        $subscriber->subscriptions()->create(['component_id' => $component->id]);

        $this->app['events']->fire(new ComponentStatusWasUpdatedEvent($component, 1, 2));

        $this->seeMessageFor($subscriber->email);
        $this->seeMessageWithSubject(trans('cachet.subscriber.email.component.subject'));

        $message = $this->getMailer()->lastMessage();

        $this->assertTrue($message->contains($component->name));
        $this->assertTrue($message->contains(trans('cachet.components.status.'.$component->status)));
    }

    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['component' => new Component(), 'original_status' => 1, 'new_status' => 1];
        $object = new ComponentStatusWasUpdatedEvent($params['component'], $params['original_status'], $params['new_status']);

        return compact('params', 'object');
    }
}
