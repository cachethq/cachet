<?php

/**
 * Logs users into their account
 */
class AuthController extends Controller {
    public function showLogin() {
        return View::make('auth.login');
    }

    public function postLogin() {
        if (Auth::attempt(Input::only(['email', 'password']))) {
            return Redirect::intended('dashboard');
        } else {
            return Redirect::back()
                           ->withInput(Input::except('password'))
                           ->with('error', 'Invalid email or password');
        }
    }

    public function logoutAction() {
        Auth::logout();

        return Redirect::to('/');
    }
}
