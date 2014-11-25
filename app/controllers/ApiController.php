<?php

	class ApiController extends \Dingo\Api\Routing\Controller {
		protected $auth;

		public function __construct(Dingo\Api\Auth\Shield $auth) {
			$this->auth = $auth;
		}

		/**
		 * Get all components
		 *
		 * @return \Illuminate\Database\Eloquent\Collection
		 */
		public function getComponents() {
			return Component::all();
		}

		/**
		 * Get a single component
		 *
		 * @param int $id
		 *
		 * @return Component
		 */
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

		/**
		 * Create a new component
		 *
		 * @return Component
		 */
		public function postComponents() {
			$component = new Component(Input::all());
			if ($component->isValid()) {
				$component->saveOrFail();
				return $component;
			} else {
				App::abort(404, $component->getErrors()->first());
			}
		}

		/**
		 * Get all incidents
		 *
		 * @return \Illuminate\Database\Eloquent\Collection
		 */
		public function getIncidents() {
			return Incident::all();
		}

		/**
		 * Get a single incident
		 *
		 * @param int $id
		 *
		 * @return Incident
		 */
		public function getIncident($id) {
			if ($incident = Incident::find($id)) {
				return $incident;
			} else {
				App::abort(404, 'Incident not found');
			}
		}

		/**
		 * Create a new incident
		 *
		 * @return Incident
		 */
		public function postIncidents() {
			$incident = new Incident(Input::all());
			if ($incident->isValid()) {
				$incident->saveOrFail();
				return $incident;
			} else {
				App::abort(404, $incident->getErrors()->first());
			}
		}
	}
