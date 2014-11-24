<?php

class ApiController extends Dingo\Api\Routing\Controller{

	public function getComponents() {
		return Component::all();
	}

	public function getComponent($id) {
		$component = Component::find($id);
		if ($component) {
			return $component;
		} else {
			App::abort(404, 'Component not found');
		}
	}

}
