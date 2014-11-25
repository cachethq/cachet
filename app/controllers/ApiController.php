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
			$incident->user_id = $this->auth->user()->id;
			return $this->saveIncident($incident);
		}

		/**
		 * Update an existing incident
		 *
		 * @param int $id
		 *
		 * @return Incident
		 */
		public function putIncident($id) {
			$incident = $this->getIncident($id);

			$incident->fill(Input::all());

			return $this->saveIncident($incident);
		}

		/**
		 * Function for saving the incident, and returning appropriate error codes
		 *
		 * @param Incident $incident
		 *
		 * @return Incident
		 */
		private function saveIncident($incident) {
			if ($incident->isValid()) {
				try {
					$component = $incident->parent;
					if (!$component) {
						App::abort(400, 'Invalid component specified');
					}

					$incident->saveOrFail();
					return $incident;
				} catch (Exception $e) {
					App::abort(500, $e->getMessage());
				}
			} else {
				App::abort(404, $incident->getErrors()->first());
			}
		}

	}
