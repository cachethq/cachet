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
				'app_name' => 'required',
				'app_domain' => 'url|required',
				'show_support' => 'boolean',
				'user.name'=> 'alpha_dash|required',
				'user.email' => 'email|required',
				'user.password' => 'required'
			]);

			if ($v->passes()) {
				// Pull the user details out.
				$userDetails = array_get($postData, 'user');
				unset($postData['user']);

				$user = new User;
				$user->username = $userDetails['name'];
				$user->email = $userDetails['email'];
				$user->password = $userDetails['password'];
				$user->save();

				Auth::login($user);

				// Create the settings, boi.
				foreach ($postData as $settingName => $settingValue) {
					$setting = new Setting;
					$setting->name = $settingName;
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
