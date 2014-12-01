<?php

class SetupController extends Controller {
    public function __construct() {
        $this->beforeFilter('csrf', ['only' => ['postCachet']]);
    }

    public function getIndex() {
        return View::make('setup')->with([
            'pageTitle' => 'Setup'
        ]);
    }

    public function postIndex() {
        $postData = Input::get();
        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.show_support' => 'boolean',
            'user.name'             => 'alpha_dash|required',
            'user.email'            => 'email|required',
            'user.password'         => 'required'
        ]);

        if ($v->passes()) {
            // Pull the user details out.
            $userDetails = array_pull($postData, 'user');

            $user           = new User;
            $user->username = $userDetails['name'];
            $user->email    = $userDetails['email'];
            $user->password = $userDetails['password'];
            $user->save();

            Auth::login($user);

            // Create the settings, boi.
            foreach (array_get($postData, 'settings') as $settingName => $settingValue) {
                $setting        = new Setting;
                $setting->name  = $settingName;
                $setting->value = $settingValue;
                $setting->save();
            }

            return Redirect::to('/');
        } else {
            // No good, let's try that again.
            return Redirect::back()->withInput()->with('errors', $v->messages());
        }
    }
}
