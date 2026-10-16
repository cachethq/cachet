<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Functional\Dashboard;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Tag;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Component updates sent from the dashboard (status dropdown and
 * drag-and-drop ordering) must not touch the component tags.
 */
class ComponentApiTest extends AbstractTestCase
{
    use DatabaseMigrations;

    protected function tagNames(Component $component)
    {
        return $component->fresh()->tags->pluck('name')->sort()->values()->all();
    }

    public function test_status_update_does_not_add_tags_to_untagged_component()
    {
        $this->signIn();
        $component = factory(Component::class)->create(['status' => 1]);

        $this->post("/dashboard/api/components/{$component->id}", ['status' => 2])
            ->assertStatus(200);

        $this->assertSame(2, (int) $component->fresh()->status);
        $this->assertSame([], $this->tagNames($component));
        $this->assertSame(0, Tag::count());
    }

    public function test_status_update_keeps_existing_tags()
    {
        $this->signIn();
        $component = factory(Component::class)->create(['status' => 1]);
        $component->syncTags(['Bar', 'Foo']);

        $this->post("/dashboard/api/components/{$component->id}", ['status' => 2])
            ->assertStatus(200);

        $this->assertSame(['Bar', 'Foo'], $this->tagNames($component));
    }

    public function test_reordering_keeps_tags()
    {
        $this->signIn();
        $first = factory(Component::class)->create(['order' => 1]);
        $second = factory(Component::class)->create(['order' => 2]);
        $first->syncTags(['Foo']);

        $this->post('/dashboard/api/components/order', ['ids' => [$second->id, $first->id]])
            ->assertStatus(200);

        $this->assertSame(1, (int) $second->fresh()->order);
        $this->assertSame(2, (int) $first->fresh()->order);
        $this->assertSame(['Foo'], $this->tagNames($first));
        $this->assertSame([], $this->tagNames($second));
    }
}
