<?php namespace CachetHq\Cachet\Controllers\Api;

use Input, Metric;
use Dingo\Api\Routing\Controller as DingoController;
use Dingo\Api\Auth\Shield;
use CachetHq\Cachet\Repositories\Component\ComponentRepository;

class MetricController extends DingoController {

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