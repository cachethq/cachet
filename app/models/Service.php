<?php

	class Service extends Eloquent {
		public function getPropertiesAttribute($properties) {
			return json_decode($properties);
		}

		public function setPropertiesAttribute($properties) {
			$this->attributes['properties'] = json_encode($properties);
		}
	}
