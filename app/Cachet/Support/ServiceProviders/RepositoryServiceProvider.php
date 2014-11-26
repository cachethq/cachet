<?php namespace Cachet\Support\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('Cachet\Repositories\Component\ComponentRepository', 'Cachet\Repositories\Component\EloquentComponentRepository');
	}

}