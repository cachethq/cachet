<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Dashboard;

use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasChangedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasCreatedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasRemovedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Tests\Cachet\Api\AbstractApiTestCase;

/**
 * This is the Dashboard API test class.
 */
class ApiTest extends AbstractApiTestCase
{
    public function test_can_reorder_components()
    {
        $this->beUser();

        $components = array();
        $components[] = factory(Component::class)->create(['id' => 1]);
        $components[] = factory(Component::class)->create(['id' => 2]);
        $components[] = factory(Component::class)->create(['id' => 3]);


        $response = $this->json('POST', '/dashboard/api/components/order', [
            'ids'        => [
                0 => "3",
                1 => "1",
                2 => "2"
            ]
        ]);

        $this->assertEquals(2, Component::find(1)->order);
        $this->assertEquals(3, Component::find(2)->order);
        $this->assertEquals(1, Component::find(3)->order);
    }

    public function test_reordering_components_retains_tags()
    {
        $this->beUser();

        $components = array();
        $components[] = factory(Component::class)->create(['id' => 1]);
        $components[] = factory(Component::class)->create(['id' => 2]);
        $components[0]->attachTags(['Internal']);
        $components[1]->attachTags(['Foo', 'Bar']);


        $response = $this->json('POST', '/dashboard/api/components/order', [
            'ids'        => [
                0 => "2",
                1 => "1",
            ]
        ]);

        $this->assertEquals("Internal", Component::find(1)->tags[0]->name);
        $this->assertEquals(2, Component::find(1)->order);
    }
}
