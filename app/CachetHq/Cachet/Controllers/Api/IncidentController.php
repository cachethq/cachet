<?php

	namespace CachetHQ\Cachet\Controllers\Api;

	use Input, Incident;
	use Dingo\Api\Routing\Controller as DingoController;
	use Dingo\Api\Auth\Shield;

	class IncidentController extends DingoController {

		protected $auth;

		public function __construct(Shield $auth) {
			$this->auth = $auth;
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
			return $this->_saveIncident($incident);
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

			return $this->_saveIncident($incident);
		}

		/**
		 * Function for saving the incident, and returning appropriate error codes
		 *
		 * @param Incident $incident
		 *
		 * @return Incident
		 */
		private function _saveIncident($incident) {
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
