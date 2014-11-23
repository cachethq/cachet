<?php

	class NoSetupFilter {
		public function filter($route, $request, $settingName) {
			$setting = Setting::get($settingName);
			if ($setting === null) {
				return Response::make('Unauthorized', 401);
			}
		}
	}
