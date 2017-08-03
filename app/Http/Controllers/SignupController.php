<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Bus\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Bus\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Models\Invite;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SignupController extends Controller
{
    /**
     * Handle the signup with invite.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function getSignup($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $invite = Invite::where('code', '=', $code)->first();

        if (!$invite || $invite->is_claimed) {
            throw new BadRequestHttpException();
        }

        return View::make('signup')
            ->withCode($invite->code)
            ->withUsername(Binput::old('username'))
            ->withEmail(Binput::old('email', $invite->email));
    }

    /**
     * Handle a signup request.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function postSignup($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $invite = Invite::where('code', '=', $code)->first();

        if (!$invite || $invite->is_claimed) {
            throw new BadRequestHttpException();
        }

        try {
            dispatch(new SignupUserCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                User::LEVEL_USER
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('signup.invite', [$invite->code])
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('cachet.signup.failure')))
                ->withErrors($e->getMessageBag());
        }

        dispatch(new ClaimInviteCommand($invite));

        return cachet_redirect('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.signup.success')));
    }
}
