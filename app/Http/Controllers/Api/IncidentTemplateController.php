<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Request;

class IncidentTemplateController extends AbstractApiController
{
    /**
     * Get all incident templates.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $templates = IncidentTemplate::query();

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $templates->sort($sortBy, $direction);
        }

        $templates = $templates->paginate(Binput::get('per_page', 20));

        return $this->paginator($templates, Request::instance());
    }

    /**
     * Get a single incident templates.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $incidentTemplate
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(IncidentTemplate $incidentTemplate)
    {
        return $this->item($incidentTemplate);
    }
}
