<?php

View::composer('index', function($view) {
    $date = date('Y-m-d');

    $incidents = Incident::whereRaw('DATE(created_at) = "' . $date . '"')
                    ->groupBy('status')
                    ->orderBy('status', 'desc');

    $incidentCount = $incidents->count();

    if ($incidentCount <= 1 || ($incidentCount > 1 && (int) $incidents->first()->status === 4)) {
        $status     = 'success';
        $message    = Lang::get('overview.good');
    } else {
        $status     = 'danger';
        $message    = Lang::get('overview.bad');
    }

    $view->with([
        'systemStatus'  => $status,
        'systemMessage' => $message
    ]);
});
