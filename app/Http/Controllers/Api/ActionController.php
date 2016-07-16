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

use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand;
use CachetHQ\Cachet\Models\TimedAction;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the action controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ActionController extends AbstractApiController
{
    /**
     * Return all timed actions.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActions()
    {
        $actions = TimedAction::query();

        $actions->search(Binput::except(['sort', 'order', 'per_page']));

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $actions->sort($sortBy, $direction);
        }

        $actions = $actions->paginate(Binput::get('per_page', 20));

        return $this->paginator($actions, Request::instance());
    }

    /**
     * Get a single timed action.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAction(TimedAction $action)
    {
        return $this->item($action);
    }

    /**
     * Create a new timed action instance.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postActions()
    {
        try {
            $action = dispatch(new CreateTimedActionCommand(
                Binput::get('name'),
                Binput::get('description', null),
                Binput::get('active', false),
                Binput::get('timezone', null),
                Binput::get('schedule_frequency'),
                Binput::get('completion_latency'),
                Binput::get('start_at')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException($e);
        }

        return $this->item($action);
    }

    /**
     * Create a timed action response instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postActionResponse(TimedAction $action)
    {
        //
    }

    /**
     * Update a timed action.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putAction(TimedAction $action)
    {
        //
    }

    /**
     * Delete a timed action.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAction(TimedAction $action)
    {
        dispatch(new DeleteTimedActionCommand($action));

        return $this->noContent();
    }
}
