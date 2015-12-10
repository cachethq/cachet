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
use CachetHQ\Cachet\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Models\Invite;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SignupController extends Controller
{
    use DispatchesJobs;

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
            ->withEmail(Binput::old('emai', $invite->email));
    }

    /**
     * Handle the unsubscribe.
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
            $this->dispatch(new SignupUserCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                2
            ));
        } catch (ValidationException $e) {
            return Redirect::route('signup.invite', ['code' => $invite->code])
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('cachet.signup.failure')))
                ->withErrors($e->getMessageBag());
        }

        $this->dispatch(new ClaimInviteCommand($invite));

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.signup.success')));
    }
}
