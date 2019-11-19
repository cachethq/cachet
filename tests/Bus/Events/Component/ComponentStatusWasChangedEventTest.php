<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Component;

use App\Bus\Events\Component\ComponentStatusWasChangedEvent;
use App\Models\Component;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

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
        $user = factory('App\Models\User')->create();

        $component = factory('App\Models\Component')->create([
            'status' => 2,
        ]);

        $subscriber = factory('App\Models\Subscriber')->create([
            'verified_at' => '1970-01-01 00:00:00',
        ]);

        $subscriber->subscriptions()->create(['component_id' => $component->id]);

        $this->app['events']->fire(new ComponentStatusWasChangedEvent($user, $component, 1, 2, false));
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
