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

use CachetHQ\Cachet\Bus\Commands\TimedAction\CreatedTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\ReportTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionCommand;
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
        //
    }

    /**
     * Create a new timed action instance.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postActions()
    {
        //
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
        //
    }
}
