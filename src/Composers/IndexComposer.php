<?php

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Support\Facades\View;

class IndexComposer
{
    /**
     * Index page view composer.
     *
     * @param \Illuminate\View\View $view
     *
     * @return void
     */
    public function compose(\Illuminate\View\View $view)
    {
        $components = Component::notStatus(1);

        if (Component::all()->count() === 0 || $components->count() === 0) {
            // If all our components are ok, do we have any non-fixed incidents?
            $incidents = Incident::orderBy('created_at', 'desc')->get();
            $incidentCount = $incidents->count();

            if ($incidentCount === 0 || ($incidentCount >= 1 && (int) $incidents->first()->status === 4)) {
                $status = 'success';
                $message = trans('cachet.service.good');
            } else {
                $status = 'danger';
                $message = trans('cachet.service.bad');
            }
        } else {
            $status  = 'danger';
            $message = trans('cachet.service.bad');
        }

        $view->with([
            'systemStatus'  => $status,
            'systemMessage' => $message,
        ]);
    }
}
