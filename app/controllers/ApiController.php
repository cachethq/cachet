<?php

	class ApiController extends \Dingo\Api\Routing\Controller {
		protected $auth;

		public function __construct(\Dingo\Api\Auth\Shield $auth) {
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
            return $this->_saveComponent($component);
		}

        /**
         * Update an existing component
         *
         * @param int $id
         *
         * @return Component
         */
        public function putComponent($id) {
            $component = $this->getComponent($id);

            $component->fill(Input::all());

            return $this->_saveComponent($component);
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
		 * Get all metrics
		 *
		 * @return \Illuminate\Database\Eloquent\Collection
		 */
		public function getMetrics() {
			return Metric::all();
		}

		/**
		 * Get a single metric
		 *
		 * @param int $id
		 *
		 * @return Metric
		 */
		public function getMetric($id) {
			if ($metric = Metric::find($id)) {
				return $metric;
			} else {
				App::abort(404, 'Metric not found');
			}
		}

        /**
         * Function for saving the component, and returning appropriate error codes
         *
         * @param Component $component
         *
         * @return Component
         */
        private function _saveComponent($component) {
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

		/**
		 * Create a new metric
		 *
		 * @return Metric
		 */
		public function postMetrics() {
			$metric = new Metric(Input::all());
			return $this->_saveMetric($metric);
		}

		/**
		 * Update an existing metric
		 *
		 * @param int $id
		 *
		 * @return Metric
		 */
		public function putMetric($id) {
			$metric = $this->getMetric($id);
			$metric->fill(Input::all());
			return $this->_saveMetric($metric);
		}

		/**
		 * Function for saving a metric, and returning appropriate error codes
		 *
		 * @param Metric $metric
		 *
		 * @return Metric
		 */
		private function _saveMetric($metric) {
			if ($metric->isValid()) {
				try {
					$metric->saveOrFail();
					return $metric;
				} catch (Exception $e) {
					App::abort(500, $e->getMessage());
				}
			} else {
				App::abort(404, $metric->getErrors()->first());
			}
		}

	}
