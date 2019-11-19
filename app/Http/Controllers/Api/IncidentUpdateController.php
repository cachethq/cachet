<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Api;

use App\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use App\Bus\Commands\IncidentUpdate\RemoveIncidentUpdateCommand;
use App\Bus\Commands\IncidentUpdate\UpdateIncidentUpdateCommand;
use App\Models\Incident;
use App\Models\IncidentUpdate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the incident update controller.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentUpdateController extends AbstractApiController
{
    /**
     * Return all updates on the incident.
     *
     * @param \App\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Incident $incident)
    {
        $updates = $incident->updates()->orderBy('created_at', 'desc');

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $updates->sort($sortBy, $direction);
        }

        $updates = $updates->paginate(Binput::get('per_page', 20));

        return $this->paginator($updates, Request::instance());
    }

    /**
     * Return a single incident update.
     *
     * @param \App\Models\Incident       $incident
     * @param \App\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Incident $incident, IncidentUpdate $update)
    {
        return $this->item($update);
    }

    /**
     * Create a new incident update.
     *
     * @param \App\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Incident $incident)
    {
        try {
            $update = execute(new CreateIncidentUpdateCommand(
                $incident,
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Auth::user()
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($update);
    }

    /**
     * Update an incident update.
     *
     * @param \App\Models\Incident       $incident
     * @param \App\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Incident $incident, IncidentUpdate $update)
    {
        try {
            $update = execute(new UpdateIncidentUpdateCommand(
                $update,
                Binput::get('status'),
                Binput::get('message'),
                Auth::user()
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($update);
    }

    /**
     * Create a new incident update.
     *
     * @param \App\Models\Incident       $incident
     * @param \App\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Incident $incident, IncidentUpdate $update)
    {
        try {
            execute(new RemoveIncidentUpdateCommand($update));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->noContent();
    }
}
