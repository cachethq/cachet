<?php

class SetupController extends Controller {
    public function showSetup() {
        return View::make('setup')->with([
            'pageTitle' => 'Setup'
        ]);
    }

    public function setupCachet() {
        $postData = Input::get();
        $v = Validator::make($postData, [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'url|required',
            'settings.show_support' => 'boolean',
            'user.name'             => 'alpha_dash|required',
            'user.email'            => 'email|required',
            'user.password'         => 'required'
        ]);

        if ($v->passes()) {
            // Pull the user details out.
            $userDetails = array_get($postData, 'user');
            unset($postData['user']);

            $user           = new User;
            $user->username = $userDetails['name'];
            $user->email    = $userDetails['email'];
            $user->password = Hash::make($userDetails['password']);
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
