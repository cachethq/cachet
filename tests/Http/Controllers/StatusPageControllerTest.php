<?php

namespace CachetHQ\Tests\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase;

class StatusPageControllerTest extends AbstractTestCase
{
    use DatabaseMigrations;

    const COMPONENT_GROUP_1_NAME = 'Component Group 1';
    const COMPONENT_GROUP_2_NAME = 'Component Group 2';
    const COMPONENT_GROUP_3_NAME = 'Component Group 3';

    /**
     * @var User
     */
    protected $user;

    protected function setUp()
    {
        parent::setUp();

        $this->setupData();
    }

    /** @test */
    public function only_public_component_groups_are_shown_for_a_guest()
    {
        $this->visit('/')
            ->see(self::COMPONENT_GROUP_1_NAME)
            ->dontSee(self::COMPONENT_GROUP_2_NAME)
            ->dontSee(self::COMPONENT_GROUP_3_NAME);
    }

    /**
     * Set up the needed data for the tests.
     *
     * @return TestCase
     */
    protected function setupData()
    {
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_1_NAME, 0);
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_2_NAME, 1);
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_3_NAME, 2);

        return $this;
    }

    /**
     * Create a component group and add one component to it.
     *
     * @param string $name
     * @param string $visible
     */
    protected function createAComponentGroupAndAddAComponent($name, $visible)
    {
        factory(ComponentGroup::class)
            ->create(['name' => $name, 'visible' => $visible])
            ->components()
            ->save(factory(Component::class)->create());
    }

    /**
     * Sign in an user if it's the case.
     *
     * @param User|null $user
     *
     * @return TestCase
     */
    protected function signIn($user = null)
    {
        if (isset($user)) {
            $this->user = $user;
        }

        if (is_null($this->user)) {
            $this->createUser();
        }

        $this->actingAs($this->user);

        return $this;
    }

    /**
     * Create an user and assign it to the user property of the class.
     *
     * @return TestCase
     */
    protected function createUser()
    {
        $this->user = factory(User::class)->create();

        return $this;
    }
}
