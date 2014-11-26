<?php namespace CachetHq\Cachet\Support\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('CachetHq\Cachet\Repositories\Component\ComponentRepository', 'CachetHq\Cachet\Repositories\Component\EloquentComponentRepository');
	}

}