<?php

	class ApiController extends \Dingo\Api\Routing\Controller {

		public function getComponents() {
			return Component::all();
		}

		public function getComponent($id) {
			if ($component = Component::find($id)) {
				return $component;
			} else {
				App::abort(404, 'Component not found');
			}
		}

		public function getComponentIncidents($id) {
			$component = $this->getComponent($id);
			return $component->incidents;
		}

		public function getIncidents() {
			return Incident::all();
		}

		public function getIncident($id) {
			if ($incident = Incident::find($id)) {
				return $incident;
			} else {
				App::abort(404, 'Incident not found');
			}
		}

	}
