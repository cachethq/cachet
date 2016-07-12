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

use CachetHQ\Cachet\Actions\ActionExceptionInterface;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionCommand;
use CachetHQ\Cachet\Models\TimedAction;
use CachetHQ\Cachet\Models\TimedActionInstance;
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
        $actions = TimedAction::active();

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
     * Get all action instances.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActionInstances(TimedAction $action)
    {
        $instances = $action->instances()->search(Binput::except(['sort', 'order', 'per_page']));

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $instances->sort($sortBy, $direction);
        }

        $instances = $instances->paginate(Binput::get('per_page', 20));

        return $this->paginator($instances, Request::instance());
    }

    /**
     * Get a single timed action instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction         $action
     * @param \CachetHQ\Cachet\Models\TimedActionInstance $instance
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActionInstance(TimedAction $action, TimedActionInstance $instance)
    {
        return $this->item($instance);
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
                Binput::get('start_at'),
                Binput::get('timezone'),
                Binput::get('window_length'),
                Binput::get('completion_latency'),
                Binput::get('timed_action_group_id')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($action);
    }

    /**
     * Create a timed action instance.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postActionInstance(TimedAction $action)
    {
        try {
            $action = dispatch(new CreateTimedActionInstanceCommand(
                $action,
                Binput::get('message', null),
                Binput::get('started_at'),
                Binput::get('completed_at', null)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        } catch (ActionExceptionInterface $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        return $this->item($action);
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
        try {
            $action = dispatch(new UpdateTimedActionCommand(
                $action,
                Binput::get('name'),
                Binput::get('description', null),
                Binput::get('active', false),
                Binput::get('timed_action_group_id')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($action);
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
