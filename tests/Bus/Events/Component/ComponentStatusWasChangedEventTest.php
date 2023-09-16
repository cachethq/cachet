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

use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasChangedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Notifications\Component\ComponentStatusChangedNotification;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Mail;

/**
 * This is the component status was changed event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentStatusWasChangedEventTest extends AbstractComponentEventTestCase
{
    use DatabaseMigrations;

    public function testComponentUpdateEmailWasSent()
    {
        $user = factory('CachetHQ\Cachet\Models\User')->create();

        $component = factory('CachetHQ\Cachet\Models\Component')->create([
            'status' => 2,
        ]);

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create([
            'verified_at' => '1970-01-01 00:00:00',
        ]);

        $subscriber->subscriptions()->create(['component_id' => $component->id]);

        Mail::fake();
        $this->app['events']->dispatch(new ComponentStatusWasChangedEvent($user, $component, 1, 2, false));

        Mail::assertSent(ComponentStatusChangedNotification::class, function ($mail) use ($subscriber, $component) {
            return $mail->hasTo($subscriber->email) &&
                $mail->hasSubject(trans('notifications.component.status_update.mail.subject')) &&
                $mail->assertSeeInHtml($component->name) &&
                $mail->assertSeeInHtml(trans('cachet.components.status.'.$component->status));
        });
    }

    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = [
            'user'            => new User(),
            'component'       => new Component(),
            'original_status' => 1,
            'new_status'      => 2,
            'silent'          => false,
        ];
        $object = new ComponentStatusWasChangedEvent(
            $params['user'],
            $params['component'],
            $params['original_status'],
            $params['new_status'],
            $params['silent']
        );

        return compact('params', 'object');
    }
}
