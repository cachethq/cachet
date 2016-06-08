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
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

/**
 * This is the user controller class.
 *
 * @author Tobias Urdin <tobias@systemsoft.se>
 */
class UserController extends AbstractApiController
{
    /**
     * Get all users.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers()
    {
        $currentUser = app(Guard::class)->user();

        if (!$currentUser->getIsAdminAttribute()) {
            throw new UnauthorizedHttpException();
        }

        $users = User::paginate(Binput::get('per_page', 20));

        return $this->paginator($users, Request::instance());
    }

    /**
     * Create a new user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUsers()
    {
        $currentUser = app(Guard::class)->user();

        if (!$currentUser->getIsAdminAttribute()) {
            throw new UnauthorizedHttpException();
        }

        try {
            $user = dispatch(new AddTeamMemberCommand(
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
     * Delete a user.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUser(User $user)
    {
        $currentUser = app(Guard::class)->user();

        if (!$currentUser->getIsAdminAttribute()) {
            throw new UnauthorizedHttpException();
        }

        dispatch(new RemoveUserCommand($user));

        return $this->noContent();
    }
}
