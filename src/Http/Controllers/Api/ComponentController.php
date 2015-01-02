<?php

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Repositories\Component\ComponentRepository;
use Dingo\Api\Routing\ControllerTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class ComponentController extends Controller
{
    use ControllerTrait;

    /**
     * The component repository instance.
     *
     * @var \CachetHQ\Cachet\Repositories\Component\ComponentRepository
     */
    protected $component;

    /**
     * Create a new component controller instance.
     *
     * @param \CachetHQ\Cachet\Repositories\Component\ComponentRepository $component
     *
     * @return void
     */
    public function __construct(ComponentRepository $component)
    {
        $this->component = $component;
    }

    /**
     * Get all components.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getComponents()
    {
        return $this->component->all();
    }

    /**
     * Get a single component.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function getComponent($id)
    {
        return $this->component->findOrFail($id);
    }

    /**
     * Return a component with incidents.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function getComponentIncidents($id)
    {
        return $this->component->with($id, ['incidents']);
    }

    /**
     * Create a new component.
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function postComponents()
    {
        return $this->component->create($this->auth->user()->id, Input::all());
    }
}
