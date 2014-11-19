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

		public function getColorAttribute() {
			switch ($this->status) {
				case 1:
					return 'warning';
				case 2:
				case 3:
					return 'info';
				case 4:
					return 'success';
			}
		}

		public function getIconAttribute() {
			switch ($this->status) {
				case 1:
					return 'glyphicon-flag';
				case 2:
					return 'glyphicon-certificate';
				case 3:
					return 'glyphicon-eye-open';
				case 4:
					return 'glyphicon-ok';
			}
		}
	}
