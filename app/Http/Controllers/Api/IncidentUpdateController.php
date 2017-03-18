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

use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\RemoveIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\UpdateIncidentUpdateCommand;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;
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
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncidentUpdates(Incident $incident)
    {
        $updates = IncidentUpdate::orderBy('created_at', 'desc');

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
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncidentUpdate(Incident $incident, IncidentUpdate $update)
    {
        return $this->item($update);
    }

    /**
     * Create a new incident update.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postIncidentUpdate(Incident $incident)
    {
        try {
            $update = dispatch(new CreateIncidentUpdateCommand(
                $incident,
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
     * Update an incident update.
     *
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putIncidentUpdate(Incident $incident, IncidentUpdate $update)
    {
        try {
            $update = dispatch(new UpdateIncidentUpdateCommand(
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
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteIncidentUpdate(Incident $incident, IncidentUpdate $update)
    {
        try {
            dispatch(new RemoveIncidentUpdateCommand($update));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->noContent();
    }
}
