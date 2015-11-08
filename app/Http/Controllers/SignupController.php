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
use CachetHQ\Cachet\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Invite;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
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
        if (is_null($code)) {
            throw new NotFoundHttpException();
        }

        $invite = Invite::where('code', '=', $code)->first();

        if (!$invite || $invite->claimed()) {
            throw new BadRequestHttpException();
        }

        return View::make('signup')
            ->withPageTitle(Setting::get('app_name'))
            ->withAboutApp(Markdown::convertToHtml(Setting::get('app_about')))
            ->withCode($invite->code);
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
        if (is_null($code)) {
            throw new NotFoundHttpException();
        }

        $invite = Invite::where('code', '=', $code)->first();

        if (!$invite || $invite->claimed()) {
            throw new BadRequestHttpException();
        }

        $this->dispatch(new SignupUserCommand(
            Binput::get('username'),
            Binput::get('password'),
            Binput::get('email'),
            2
        ));

        $this->dispatch(new ClaimInviteCommand($invite));

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.unsubscribed')));
    }
}
