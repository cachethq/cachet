<?php

	namespace CachetHQ\Cachet\Support\ServiceProviders;

	use Illuminate\Support\ServiceProvider;

	class RepositoryServiceProvider extends ServiceProvider {
		public function register() {
			$this->app->bind(
				'CachetHQ\Cachet\Repositories\Component\ComponentRepository',
				'CachetHQ\Cachet\Repositories\Component\EloquentComponentRepository'
			);
		}
	}
