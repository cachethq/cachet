<?php

	class Setting extends Eloquent {
		public static function get($settingName) {
			return self::where('name', $settingName)->first()->value;
		}
	}
