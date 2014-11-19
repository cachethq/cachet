<?php

	class Setting extends Eloquent {
		public static function get($settingName) {
			try {
				$setting = self::where('name', $settingName)->first()->value;
			} catch (ErrorException $e) {
				$setting = null;
			}

			return $setting;
		}
	}
