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
 * This is the modules renderer service test class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class RendererTest extends AbstractTestCase
{
    public function testRenderNoModules()
    {
        $renderer = m::mock('CachetHQ\Cachet\Services\Modules\Renderer[renderModules]');
        $renderer->shouldReceive('renderModules')->once()->passthru();

        $output = $renderer->renderModules(
            $this->getFactory(),
            [],
            [],
            null
        );

        $this->assertSame('', $output);
    }

    public function testRenderNonExistentModulesGroup()
    {
        $renderer = m::mock('CachetHQ\Cachet\Services\Modules\Renderer[renderModules]');
        $renderer->shouldReceive('renderModules')->once()->passthru();

        $output = $renderer->renderModules(
            $this->getFactory(),
            [],
            $this->getModules(),
            'non-existent group'
        );

        $this->assertSame('', $output);
    }

    public function testRenderModules()
    {
        $renderer = m::mock('CachetHQ\Cachet\Services\Modules\Renderer[renderModules]');
        $renderer->shouldReceive('renderModules')->once()->passthru();

        $factory = $this->getFactory([
            'partial.a', 'partial.b', 'partial.c',
            'partial.one.a', 'partial.one.b', 'partial.one.c',
            'partial.two.a',
            'partial.three.a', 'partial.three.b',
        ]);

        $output = $renderer->renderModules(
            $factory,
            ['a' => 'b', 'c' => 'd'],
            $this->getModules(),
            null
        );

        $this->assertSame('partial.apartial.one.apartial.one.bpartial.one.cpartial.two.apartial.bpartial.cpartial.three.apartial.three.b', $output);
    }

    public function testRenderModuleGroups()
    {
        $renderer = m::mock('CachetHQ\Cachet\Services\Modules\Renderer[renderModules]');
        $renderer->shouldReceive('renderModules')->once()->passthru();

        $factory = $this->getFactory([
            'partial.one.a', 'partial.one.b', 'partial.one.c',
        ]);

        $output = $renderer->renderModules(
            $factory,
            ['a' => 'b', 'c' => 'd'],
            $this->getModules(),
            'one'
        );

        $this->assertSame('partial.one.apartial.one.bpartial.one.c', $output);
    }

    protected function getModules()
    {
        return [
            'two' => [
                'order'    => 3,
                ['partial' => 'partial.two.a'],
            ],
            [
                ['partial' => 'partial.c'],
                ['partial' => 'partial.b', 'order' => 1],
            ],
            [
                'order'    => 1,
                ['partial' => 'partial.a'],
            ],
            'one' => [
                'order'    => 2,
                ['partial' => 'partial.one.c'],
                ['partial' => 'partial.one.a', 'order' => 1],
                ['partial' => 'partial.one.b', 'order' => 2],
            ],
            'three' => [
                ['partial' => 'partial.three.a'],
                ['partial' => 'partial.three.b'],
            ],
        ];
    }

    protected function getFactory($views = [])
    {
        $factory = m::mock('Illuminate\View\Factory[make]', $this->getFactoryArgs());

        foreach ($views as $view) {
            $factory->shouldReceive('make')->once()->with($view, ['a' => 'b', 'c' => 'd'])->andReturn($mockView = m::mock('StdClass'));
            $mockView->shouldReceive('render')->once()->andReturn($view);
        }

        return $factory;
    }

    protected function getFactoryArgs()
    {
        return [
            m::mock('Illuminate\View\Engines\EngineResolver'),
            m::mock('Illuminate\View\ViewFinderInterface'),
            m::mock('Illuminate\Contracts\Events\Dispatcher'),
        ];
    }
}
