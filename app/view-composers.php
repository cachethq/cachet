<?php

View::composer('index', function ($view) {
    $date = date('Y-m-d');

    $incidents = Incident::orderBy('created_at', 'desc')->get();
    $incidentCount = $incidents->count();

    if ($incidentCount === 0 || ($incidentCount > 1 && (int) $incidents->first()->status === 4)) {
        $status  = 'success';
        $message = Lang::get('cachet.service.good');
    } else {
        $status  = 'danger';
        $message = Lang::get('cachet.service.bad');
    }

    $view->with([
        'systemStatus'  => $status,
        'systemMessage' => $message,
    ]);
});
