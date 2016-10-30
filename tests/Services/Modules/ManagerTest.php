<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Services\Modules;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Mockery as m;

/**
 * This is the modules manager service test class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ManagerTest extends AbstractTestCase
{
    public function testGroupNoModules()
    {
        $manager = m::mock('CachetHQ\Cachet\Services\Modules\Manager[groupModules]');
        $manager->shouldReceive('groupModules')->once()->passthru();

        $grouped = $manager->groupModules([]);

        $this->assertSame([], $grouped);
    }

    public function testGroupModulesNoGroups()
    {
        $manager = m::mock('CachetHQ\Cachet\Services\Modules\Manager[groupModules]');
        $manager->shouldReceive('groupModules')->once()->passthru();

        $grouped = $manager->groupModules($this->getModules(), []);

        $this->assertSame($this->getGroupedModules(), $grouped);
    }

    public function testGroupModules()
    {
        $manager = m::mock('CachetHQ\Cachet\Services\Modules\Manager[groupModules]');
        $manager->shouldReceive('groupModules')->once()->passthru();

        $grouped = $manager->groupModules($this->getModules(), $this->getGroups());

        $this->assertSame($this->getGroupedModulesWithOrders(), $grouped);
    }

    public function testOrderModules()
    {
        $manager = m::mock('CachetHQ\Cachet\Services\Modules\Manager[orderModules]');
        $manager->shouldReceive('orderModules')->once()->passthru();

        $ordered = $manager->orderModules($this->getGroupedModules());

        $this->assertSame($this->getOrderedModules(), $ordered);
    }

    public function testOrderModulesWithOrders()
    {
        $manager = m::mock('CachetHQ\Cachet\Services\Modules\Manager[orderModules]');
        $manager->shouldReceive('orderModules')->once()->passthru();

        $ordered = $manager->orderModules($this->getGroupedModulesWithOrders());

        $this->assertSame($this->getOrderedModulesWithOrders(), $ordered);
    }

    protected function getModules()
    {
        return [
            ['group' => 'two', 'partial' => 'partials.two.a'],
            ['partial' => 'partials.a', 'order' => 8],
            ['group'   => 'one', 'partial' => 'partials.one.c'],
            ['partial' => 'partials.c'],
            ['group'   => 'one', 'partial' => 'partials.one.a', 'order' => 1],
            ['group'   => 'one', 'partial' => 'partials.one.b', 'order' => 2],
            ['partial' => 'partials.b', 'order' => 15],
        ];
    }

    protected function getGroups()
    {
        return [
            'one' => 1,
            'two' => 2,
        ];
    }

    protected function getGroupedModules()
    {
        return [
            'two' => [
                ['group' => 'two', 'partial' => 'partials.two.a'],
            ],
            [['partial' => 'partials.a', 'order' => 8], 'order' => 8],
            'one' => [
                ['group' => 'one', 'partial' => 'partials.one.c'],
                ['group' => 'one', 'partial' => 'partials.one.a', 'order' => 1],
                ['group' => 'one', 'partial' => 'partials.one.b', 'order' => 2],
            ],
            [['partial' => 'partials.c'], 'order' => PHP_INT_MAX - 4],
            [['partial' => 'partials.b', 'order' => 15], 'order' => 15],
        ];
    }

    protected function getGroupedModulesWithOrders()
    {
        return [
            'two' => [
                ['group' => 'two', 'partial' => 'partials.two.a'],
                'order' => 2,
            ],
            [['partial' => 'partials.a', 'order' => 8], 'order' => 8],
            'one' => [
                ['group' => 'one', 'partial' => 'partials.one.c'],
                ['group' => 'one', 'partial' => 'partials.one.a', 'order' => 1],
                ['group' => 'one', 'partial' => 'partials.one.b', 'order' => 2],
                'order'  => 1,
            ],
            [['partial' => 'partials.c'], 'order' => PHP_INT_MAX - 4],
            [['partial' => 'partials.b', 'order' => 15], 'order' => 15],
        ];
    }

    protected function getOrderedModules()
    {
        return [
            [['partial' => 'partials.a', 'order' => 8], 'order' => 8],
            2     => [['partial' => 'partials.b', 'order' => 15], 'order' => 15],
            1     => [['partial' => 'partials.c'], 'order' => PHP_INT_MAX - 4],
            'two' => [
                ['group' => 'two', 'partial' => 'partials.two.a'],
            ],
            'one' => [
                1 => ['group' => 'one', 'partial' => 'partials.one.a', 'order' => 1],
                2 => ['group' => 'one', 'partial' => 'partials.one.b', 'order' => 2],
                0 => ['group' => 'one', 'partial' => 'partials.one.c'],
            ],
        ];
    }

    protected function getOrderedModulesWithOrders()
    {
        return [
            'one' => [
                1       => ['group' => 'one', 'partial' => 'partials.one.a', 'order' => 1],
                2       => ['group' => 'one', 'partial' => 'partials.one.b', 'order' => 2],
                0       => ['group' => 'one', 'partial' => 'partials.one.c'],
                'order' => 1,
            ],
            'two' => [
                ['group' => 'two', 'partial' => 'partials.two.a'],
                'order' => 2,
            ],
            [['partial' => 'partials.a', 'order' => 8], 'order' => 8],
            2 => [['partial' => 'partials.b', 'order' => 15], 'order' => 15],
            1 => [['partial' => 'partials.c'], 'order' => PHP_INT_MAX - 4],
        ];
    }
}
