<?php

	class Incident extends Eloquent {
		public function getHumanStatusAttribute() {
			switch ($this->status) {
				case 1: return 'Investigating';
				case 2: return 'Identified';
				case 3: return 'Watching';
				case 4: return 'Fixed';
			}
		}

		public function getLabelColorAttribute() {
			switch ($this->status) {
				case 1:
					return 'label-warning';
				case 2:
				case 3:
					return 'label-info';
				case 4:
					return 'label-success';
			}
		}
	}
