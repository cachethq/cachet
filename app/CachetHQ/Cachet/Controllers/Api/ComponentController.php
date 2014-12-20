<?php

namespace CachetHQ\Cachet\Controllers\Api;

use CachetHQ\Cachet\Repositories\Component\ComponentRepository;
use Dingo\Api\Routing\ControllerTrait;
use Illuminate\Routing\Controller;
use Input;

class ComponentController extends Controller
{

    use ControllerTrait;

    protected $component;

    public function __construct(ComponentRepository $component)
    {
        $this->component = $component;
    }

    /**
     * Get all components
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getComponents()
    {
        return $this->component->all();
    }

    /**
     * Get a single component
     *
     * @param int $id
     *
     * @return \Component
     */
    public function getComponent($id)
    {
        return $this->component->findOrFail($id);
    }

    /**
     * Return a component with incidents
     * @param  int        $id Component ID
     * @return \Component
     */
    public function getComponentIncidents($id)
    {
        return $this->component->with($id, ['incidents']);
    }

    /**
     * Create a new component
     *
     * @return \Component
     */
    public function postComponents()
    {
        return $this->component->create($this->auth->user()->id, Input::all());
    }
}
