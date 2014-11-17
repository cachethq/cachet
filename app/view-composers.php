<?php

	View::composer('index', function($view) {
		$date = date('Y-m-d');

		$incidents = Incident::whereRaw('DATE(created_at) = "' . $date . '"')
						->groupBy('status')
						->orderBy('status', 'desc');

		if ($incidents->count() === 0 || (int) $incident->first()->status === 4) {
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
