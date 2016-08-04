<?php

namespace CachetHQ\Tests\Cachet\Http\Controllers;

use Exception;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Settings\Cache;
use CachetHQ\Cachet\Settings\Repository;
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

        $this->setupData()
            ->setupConfig();
    }

    /** @test */
    public function only_public_component_groups_are_shown_for_a_guest()
    {
        $this->visit('/')
            ->see(self::COMPONENT_GROUP_1_NAME)
            ->dontSee(self::COMPONENT_GROUP_2_NAME)
            ->dontSee(self::COMPONENT_GROUP_3_NAME);
    }

    /** @test */
    public function all_component_groups_are_displayed_for_loggedin_users()
    {
        $this->signIn();

        $this->visit('/')
            ->see(self::COMPONENT_GROUP_1_NAME)
            ->see(self::COMPONENT_GROUP_2_NAME)
            ->see(self::COMPONENT_GROUP_3_NAME);
    }

    /**
     * Set up the needed data for the tests.
     *
     * @return TestCase
     */
    protected function setupData()
    {
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_1_NAME, ComponentGroup::VISIBLE_PUBLIC);
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_2_NAME, ComponentGroup::VISIBLE_LOGGED_IN);
        $this->createAComponentGroupAndAddAComponent(self::COMPONENT_GROUP_3_NAME, ComponentGroup::VISIBLE_HIDDEN);

        factory(Setting::class)->create();

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

    /**
     * Set up the needed configuration to be able to run the tests.
     *
     * @return TestCase
     */
    protected function setupConfig()
    {
        $env = $this->app->environment();
        $repo = $this->app->make(Repository::class);
        $cache = $this->app->make(Cache::class);
        $loaded = $cache->load($env);

        try {
            if ($loaded === false) {
                $loaded = $repo->all();
                $cache->store($env, $loaded);
            }

            $settings = array_merge($this->app->config->get('setting'), $loaded);

            $this->app->config->set('setting', $settings);
        } catch (Exception $e) {
            //
        }

        return $this;
    }
}
