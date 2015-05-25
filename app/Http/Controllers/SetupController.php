<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class SetupController extends AbstractController
{
    /**
     * Create a new setup controller instance.
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', ['only' => ['postCachet']]);
    }

    /**
     * Returns the setup page.
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        segment_page('Setup');

        return View::make('setup')->with([
            'pageTitle' => trans('setup.setup'),
        ]);
    }

    /**
     * Handles validation on step one of setup form.
     *
     * @return \Illuminate\Http\Response
     */
    public function postStep1()
    {
        $postData = Binput::all();

        segment_track('Setup', [
            'step' => '1',
        ]);

        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'boolean',
        ]);

        if ($v->passes()) {
            segment_track('Setup', [
                'event'   => 'Step 1',
                'success' => true,
            ]);

            return Response::json(['status' => 1]);
        } else {
            // No good, let's try that again.

            segment_track('Setup', [
                'event'   => 'Step 1',
                'success' => false,
            ]);

            return Response::json(['errors' => $v->messages()], 400);
        }
    }

    /**
     * Handles the actual app setup.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function postStep2()
    {
        $postData = Binput::all();

        segment_track('Setup', [
            'step' => '2',
        ]);

        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'boolean',
            'user.username'         => 'alpha_num|required',
            'user.email'            => 'email|required',
            'user.password'         => 'required',
        ]);

        if ($v->passes()) {
            // Pull the user details out.
            $userDetails = array_pull($postData, 'user');

            $user = User::create([
                'username' => $userDetails['username'],
                'email'    => $userDetails['email'],
                'password' => $userDetails['password'],
                'level'    => 1,
            ]);

            Auth::login($user);

            $settings = array_get($postData, 'settings');

            foreach ($settings as $settingName => $settingValue) {
                Setting::create([
                    'name'  => $settingName,
                    'value' => $settingValue,
                ]);
            }

            Session::flash('setup.done', true);

            segment_track('Setup', [
                'event'   => 'Step 2',
                'success' => true,
            ]);

            if (Request::ajax()) {
                return Response::json(['status' => 1]);
            }

            return Redirect::to('dashboard');
        } else {
            segment_track('Setup', [
                'event'   => 'Step 2',
                'success' => false,
            ]);

            // No good, let's try that again.
            if (Request::ajax()) {
                return Response::json(['errors' => $v->messages()], 400);
            }

            return Redirect::back()->withInput()->with('errors', $v->messages());
        }
    }
}
