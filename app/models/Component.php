<?php

	class Component extends Eloquent implements Dingo\Api\Transformer\TransformableInterface {
		/**
		 * Lookup all of the incidents reported on the component.
		 * @return Illuminate\Database\Eloquent\Relations
		 */
		public function incidents() {
			return $this->hasMany('Incident', 'component', 'id');
		}

		/**
		 * Looks up the human readable version of the status.
		 * @return string
		 */
		public function getHumanStatusAttribute() {
			switch ($this->status) {
				case 1: return 'Operational';
				case 2: return 'Performance Issues';
				case 3: return 'Partial Outage';
				case 4: return 'Major Outage';
			}
		}

		/**
		 * Color of the label for each status.
		 * @return string HTML class name
		 */
		public function getColorAttribute() {
			switch ($this->status) {
				case 1: return 'text-success';
				case 2: return 'text-info';
				case 3: return 'text-alert';
				case 4: return 'text-danger';
			}
		}

		/**
		 * Get the transformer instance.
		 *
		 * @return mixed
		 */
		public function getTransformer() {
			return new ComponentTransformer();
		}
	}
