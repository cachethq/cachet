<?php namespace CachetHq\Cachet\Controllers\Api;

use Input;
use Dingo\Api\Routing\Controller as DingoController;
use Dingo\Api\Auth\Shield;
use CachetHq\Cachet\Repositories\Component\ComponentRepository;

class ComponentController extends DingoController {

	protected $auth;

	protected $component;

	public function __construct(Shield $auth, ComponentRepository $component) {
		$this->auth = $auth;
		$this->component = $component;
	}

	/**
	 * Get all components
	 *
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function getComponents() {
		return $this->component->all();
	}

	/**
	 * Get a single component
	 *
	 * @param int $id
	 *
	 * @return Component
	 */
	public function getComponent($id) {
		return $this->component->findOrFail($id);
	}

	public function getComponentIncidents($id) {
		return $this->component->with($id, ['incidents']);
	}

	/**
	 * Create a new component
	 *
	 * @return Component
	 */
	public function postComponents() {
		return $this->component->create($this->auth->user()->id, Input::all());
	}
}
