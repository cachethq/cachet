<?php

	class Incident extends Eloquent {
		/**
		 * An incident belongs to a component.
		 * @return Illuminate\Database\Eloquent\Relations
		 */
		public function parent() {
			return $this->belongsTo('Component', 'component', 'id');
		}

		/**
		 * Returns a human readable version of the status.
		 * @return string
		 */
		public function getHumanStatusAttribute() {
			switch ($this->status) {
				case 1: return 'Investigating';
				case 2: return 'Identified';
				case 3: return 'Watching';
				case 4: return 'Fixed';
			}
		}

		/**
		 * Looks up the class name for the status.
		 * @return string
		 */
		public function getColorAttribute() {
			switch ($this->status) {
				case 1: return 'warning';
				case 2: return 'alert';
				case 3: return 'info';
				case 4: return 'success';
			}
		}

		/**
		 * Finds the icon to use for each status.
		 * @return string
		 */
		public function getIconAttribute() {
			switch ($this->status) {
				case 1: return 'glyphicon-flag';
				case 2: return 'glyphicon-warning-sign';
				case 3: return 'glyphicon-eye-open';
				case 4: return 'glyphicon-ok';
			}
		}
	}
