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

use CachetHQ\Cachet\Bus\Commands\User\AddTeamMemberCommand;
use CachetHQ\Cachet\Bus\Commands\User\RemoveUserCommand;
use CachetHQ\Cachet\Bus\Commands\User\UpdateTeamMemberCommand;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the user controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UserController extends AbstractApiController
{
    /**
     * Create a new user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUsers()
    {
        try {
            $user = dispatch(new AddTeamMemberCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                Binput::get('level', User::LEVEL_USER)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($user);
    }

    /**
     * Update an existing user.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUser(User $user)
    {
        try {
            dispatch(new UpdateTeamMemberCommand(
                $user,
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                Binput::get('level')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($user);
    }

    /**
     * Delete a user from the system.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUser(User $user)
    {
        dispatch(new RemoveUserCommand($user));

        return $this->noContent();
    }
}
