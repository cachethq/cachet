<?php

	class HomeController extends Controller {
		public function showIndex() {
			return View::make('index');
		}
	}
