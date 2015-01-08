<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use DateTime;
use DateTimeZone;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class SetupController extends Controller
{
    /**
     * Create a new setup controller instance.
     *
     * @return void
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
        $langs = [
            'en'    => 'English',
            'fr'    => 'Français',
            'pt-BR' => 'Portuguese, Brazilian',
        ];

        $regions = [
            'Africa'     => DateTimeZone::AFRICA,
            'America'    => DateTimeZone::AMERICA,
            'Antarctica' => DateTimeZone::ANTARCTICA,
            'Asia'       => DateTimeZone::ASIA,
            'Atlantic'   => DateTimeZone::ATLANTIC,
            'Europe'     => DateTimeZone::EUROPE,
            'Indian'     => DateTimeZone::INDIAN,
            'Pacific'    => DateTimeZone::PACIFIC,
        ];

        $timezones = [];

        foreach ($regions as $name => $mask) {
            $zones = DateTimeZone::listIdentifiers($mask);

            foreach ($zones as $timezone) {
                // Lets sample the time there right now
                $time = new DateTime(null, new DateTimeZone($timezone));

                // Us dumb Americans can't handle millitary time
                $ampm = $time->format('H') > 12 ? ' ('.$time->format('g:i a').')' : '';

                // Remove region name and add a sample time
                $timezones[$name][$timezone] = substr($timezone, strlen($name) + 1).' - '.$time->format('H:i').$ampm;

                $timezones[$name] = str_replace('_', ' ', $timezones[$name]);
            }
        }

        return View::make('setup')->with([
            'pageTitle' => trans('setup.setup'),
            'timezones' => $timezones,
            'langs'     => $langs,
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

        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'boolean',
        ]);

        if ($v->passes()) {
            return Response::json(['status' => 1]);
        } else {
            // No good, let's try that again.
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

        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'boolean',
            'user.username'         => 'alpha_dash|required',
            'user.email'            => 'email|required',
            'user.password'         => 'required'
        ]);

        if ($v->passes()) {
            // Pull the user details out.
            $userDetails = array_pull($postData, 'user');

            // TODO: Do we want to just use Model::unguard() here?
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

            if (Request::ajax()) {
                return Response::json(['status' => 1]);
            }

            return Redirect::to('dashboard');
        } else {
            // No good, let's try that again.
            if (Request::ajax()) {
                return Response::json(['errors' => $v->messages()], 400);
            }

            return Redirect::back()->withInput()->with('errors', $v->messages());
        }
    }
}
