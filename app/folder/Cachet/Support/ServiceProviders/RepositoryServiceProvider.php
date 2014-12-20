<?php

namespace CachetHQ\Cachet\Support\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {
	public function register() {
		$this->app->bind(
			'CachetHQ\Cachet\Repositories\Component\ComponentRepository',
			'CachetHQ\Cachet\Repositories\Component\EloquentComponentRepository'
		);
		$this->app->bind(
			'CachetHQ\Cachet\Repositories\Incident\IncidentRepository',
			'CachetHQ\Cachet\Repositories\Incident\EloquentIncidentRepository'
		);
		$this->app->bind(
			'CachetHQ\Cachet\Repositories\Metric\MetricRepository',
			'CachetHQ\Cachet\Repositories\Metric\EloquentMetricRepository'
		);
	}
}
