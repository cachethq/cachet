<?php Cachet\Controllers\Api;

use \Dingo\Api\Routing\Controller as DingoController;
use Dingo\Api\Auth\Shield;
use Cachet\Repositories\Component\ComponentRepository;

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
		return $this->component->incidents($id);
	}

	/**
	 * Create a new component
	 *
	 * @return Component
	 */
	public function postComponents() {
		$component = new Component(Input::all());
		$component->user_id = $this->auth->user()->id;
		if ($component->isValid()) {
			try {
				$component->saveOrFail();
				return $component;
			} catch (Exception $e) {
				App::abort(500, $e->getMessage());
			}
		} else {
			App::abort(404, $component->getErrors()->first());
		}
	}
}
