<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StatusPageControllerTest extends AbstractTestCase
{
    use DatabaseMigrations;

    const COMPONENT_GROUP_1_NAME = 'Component Group 1';
    const COMPONENT_GROUP_2_NAME = 'Component Group 2';

    /**
     * @var User
     */
    protected $user;

    protected function setUp()
    {
        parent::setUp();

        $this->setupPublicAndNonPublicComponentGroups()
            ->setupConfig();
    }

    public function testIndexShowsOnlyPublicComponentGroupsToGuests()
    {
        $this->visit('/')
            ->see(self::COMPONENT_GROUP_1_NAME)
            ->dontSee(self::COMPONENT_GROUP_2_NAME);
    }

    public function testIndexShowsAllComponentGroupsToLoggedInUsers()
    {
        $this->signIn();

        $this->visit('/')
            ->see(self::COMPONENT_GROUP_1_NAME)
            ->see(self::COMPONENT_GROUP_2_NAME);
    }

    /**
     * Set up the needed data for the components groups tests.
     *
     * @return AbstractTestCase
     */
    protected function setupPublicAndNonPublicComponentGroups()
    {
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_1_NAME, ComponentGroup::VISIBLE_GUEST)
            ->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_2_NAME, ComponentGroup::VISIBLE_AUTHENTICATED);

        factory(Setting::class)->create();

        return $this;
    }

    /**
     * Create a component group and add one component to it.
     *
     * @param string $name
     * @param string $visible
     *
     * @return AbstractTestCase
     */
    protected function createAComponentGroupAndAddAComponent($name, $visible)
    {
        factory(ComponentGroup::class)
            ->create(['name' => $name, 'visible' => $visible])
            ->components()
            ->save(factory(Component::class)->create());

        return $this;
    }
}
