<?php

	/**
	 * Logs users into their account
	 */
	class AuthController extends Controller {
		public function showLogin() {
			return 'Coming soon...';
		}

		public function logoutAction() {
			Auth::logut();

			return Redirect::to('/');
		}
	}
