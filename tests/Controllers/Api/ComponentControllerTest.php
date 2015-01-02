<?php

class ComponentControllerTest extends TestCase
{
    public function setUp()
    {
        $this->repo = Mockery::mock('CachetHQ\Cachet\Repositories\Component\ComponentRepository');
        $this->dingo = Mockery::mock('Dingo\Api\Auth\Shield');
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function test_get_components_method()
    {
        $this->repo->shouldReceive('all')->once()->andReturn('foo');

        $controller = new CachetHQ\Cachet\Http\Controllers\Api\ComponentController($this->repo);
        $response = $controller->getComponents();

        $this->assertEquals('foo', $response);
    }

    public function test_get_component_method()
    {
        $this->repo->shouldReceive('findOrFail')->with(1)->once()->andReturn('foo');

        $controller = new CachetHQ\Cachet\Http\Controllers\Api\ComponentController($this->repo);
        $response = $controller->getComponent(1);

        $this->assertEquals('foo', $response);
    }
}
