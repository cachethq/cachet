<?php

	Route::model('incident', 'Incident');
	Route::model('component', 'Component');
	Route::model('webhook', 'WebHook');

	routesInDirectory();

	function routesInDirectory($app = '') {
		$routeDir = app_path('routes/' . $app . ($app !== '' ? '/' : NULL));
		$iterator = new RecursiveDirectoryIterator($routeDir);
		$iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

		foreach ($iterator as $route) {
			$isDotFile = strpos($route->getFilename(), '.') === 0;

			if (!$isDotFile && !$route->isDir()) {
				require $routeDir . $route->getFilename();
			}
		}
	}
