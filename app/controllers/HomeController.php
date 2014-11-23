<?php

	class HomeController extends Controller {
		/**
		 * Returns the rendered Blade templates.
		 * @return View
		 */
		public function showIndex() {
			return View::make('index');
		}
	}
