<?php

namespace CachetHQ\Tests\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase;

class DashboardControllerTest extends AbstractTestCase
{
    use DatabaseMigrations;

    const COMPONENT_GROUP_1_NAME = 'Component Group 1';
    const COMPONENT_GROUP_2_NAME = 'Component Group 2';
    const COMPONENT_GROUP_3_NAME = 'Component Group 3';
    const COMPONENT_GROUP_4_NAME = 'Component Group 4';

    /**
     * @var User
     */
    protected $user;

    protected function setUp()
    {
        parent::setUp();

        $this->setupPublicLoggedInAndHiddenComponentGroups()
            ->setupConfig();
    }

    /** @test */
    public function on_dashboard_hidden_component_groups_are_not_displayed_if_not_belonging_to_logged_in_user()
    {
        $this->signIn()
            ->createAComponentGroupAndAddAComponent(
                self::COMPONENT_GROUP_4_NAME,
                ComponentGroup::VISIBLE_HIDDEN,
                $this->createUser()
            )
        ;

        $this->visit('/dashboard')
            ->see(self::COMPONENT_GROUP_1_NAME)
            ->see(self::COMPONENT_GROUP_2_NAME)
            ->see(self::COMPONENT_GROUP_3_NAME)
            ->dontSee(self::COMPONENT_GROUP_4_NAME)
        ;
    }

    /**
     * Set up the needed data for the components groups tests.
     *
     * @return TestCase
     */
    protected function setupPublicLoggedInAndHiddenComponentGroups()
    {
        $this->signIn()
            ->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_1_NAME, ComponentGroup::VISIBLE_PUBLIC)
            ->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_2_NAME, ComponentGroup::VISIBLE_LOGGED_IN)
            ->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_3_NAME, ComponentGroup::VISIBLE_HIDDEN)
        ;

        factory(Setting::class)->create();

        auth()->logout();

        return $this;
    }

    /**
     * Create a component group and add one component to it.
     * Also attaches a creator if any given as a parameter
     * or exists in the test class.
     *
     * @param string $name
     * @param string $visible
     * @param User   $user
     *
     * @return TestCase
     */
    protected function createAComponentGroupAndAddAComponent($name, $visible, User $user = null)
    {
        $createdBy = 0;
        if (!is_null($user)) {
            $createdBy = $user->getKey();
        } elseif (!is_null($this->user)) {
            $createdBy = $this->user->getKey();
        }

        factory(ComponentGroup::class)
            ->create(['name' => $name, 'visible' => $visible, 'created_by' => $createdBy])
            ->components()
            ->save(factory(Component::class)->create())
        ;

        return $this;
    }
}
