<?php

	View::composer('index', function($view) {
		$date = date('Y-m-d');
		$incident = Incident::whereRaw('DATE(created_at) = "' . $date . '"')
						->groupBy('status')
						->orderBy('status', 'desc')
						->first();

		if ((int) $incident->status === 4) {
			$status = 'success';
			$message = 'All systems are functional.';
		} else {
			$status = 'error';
			$message = 'Some systems are experiencing issues.';
		}

		$view->with([
			'systemStatus' => $status,
			'systemMessage' => $message
		]);
	});
