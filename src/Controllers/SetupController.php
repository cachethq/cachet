<?php

namespace CachetHQ\Cachet\Controllers

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;
use Setting;
use User;

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
        return View::make('setup')->with([
            'pageTitle' => 'Setup',
        ]);
    }

    /**
     * Handles the actual app setup.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postIndex()
    {
        $postData = Input::get();

        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
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
                $setting = new Setting();
                $setting->name = $settingName;
                $setting->value = $settingValue;
                $setting->save();
            }

            return Redirect::to('dashboard');
        } else {
            // No good, let's try that again.
            return Redirect::back()->withInput()->with('errors', $v->messages());
        }
    }
}
