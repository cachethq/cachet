<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Contracts\View\View;

class IndexComposer
{
    /**
     * Index page view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     */
    public function compose(View $view)
    {
        // Default data
        $withData = [
            'systemStatus'  => 'danger',
            'systemMessage' => trans('cachet.service.bad'),
            'favicon'       => 'favicon-high-alert',
        ];

        if (Component::notStatus(1)->count() === 0) {
            // If all our components are ok, do we have any non-fixed incidents?
            $incidents = Incident::notScheduled()->orderBy('created_at', 'desc')->get();
            $incidentCount = $incidents->count();

            if ($incidentCount === 0 || ($incidentCount >= 1 && (int) $incidents->first()->status === 4)) {
                $withData = [
                    'systemStatus'  => 'success',
                    'systemMessage' => trans('cachet.service.good'),
                    'favicon'       => 'favicon',
                ];
            }
        } else {
            if (Component::whereIn('status', [2, 3])->count() > 0) {
                $withData['favicon'] = 'favicon-medium-alert';
            }
        }

        $view->with($withData);
    }
}
