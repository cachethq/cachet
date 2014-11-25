<?php

	/**
	 * AKA the Management Panel.
	 */
	class DashboardController extends Controller {
		public function showDashboard() {
			return View::make('dashboard.index');
		}
	}
