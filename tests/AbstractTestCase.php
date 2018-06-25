<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet;

use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Settings\Cache;
use CachetHQ\Cachet\Settings\Repository;
use Illuminate\Foundation\Testing\TestCase;

/**
 * This is the abstract test case class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractTestCase extends TestCase
{
    use CreatesApplicationTrait;

    /**
     * Test actor.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    protected $user;

    /**
     * Sign in an user if it's the case.
     *
     * @param \CachetHQ\Cachet\Models\User|null $user
     *
     * @return \CachetHQ\Tests\Cachet\AbstractTestCase
     */
    protected function signIn(User $user = null)
    {
        $this->user = $user ?: $this->createUser();

        $this->be($this->user);

        return $this;
    }

    /**
     * Create and return a new user.
     *
     * @param array $properties
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    protected function createUser($properties = [])
    {
        return factory(User::class)->create($properties);
    }

    /**
     * Set up the needed configuration to be able to run the tests.
     *
     * @return \CachetHQ\Tests\Cachet\AbstractTestCase
     */
    protected function setupConfig()
    {
        $env = $this->app->environment();
        $repo = $this->app->make(Repository::class);
        $cache = $this->app->make(Cache::class);
        $loaded = $cache->load($env);

        if ($loaded === false) {
            $loaded = $repo->all();
            $cache->store($env, $loaded);
        }

        $settings = array_merge($this->app->config->get('setting'), $loaded);

        $this->app->config->set('setting', $settings);

        return $this;
    }
}
