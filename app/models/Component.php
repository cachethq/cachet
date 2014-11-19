<?php

	class Component extends Eloquent {
		public function getHumanStatusAttribute() {
			switch ($this->status) {
				case 1: return 'Operational';
				case 2: return 'Performance Issues';
				case 3: return 'Partial Outage';
				case 4: return 'Major Outage';
			}
		}

		public function getColorAttribute() {
			switch ($this->status) {
				case 1: return 'text-success';
				case 2: return 'text-info';
				case 3: return 'text-alert';
				case 4: return 'text-danger';
			}
		}
	}
