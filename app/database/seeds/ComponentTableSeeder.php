<?php

class ComponentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$defaultComponents = [
			[
				"name" => "API",
				"description" => "Used by third-parties to connect to us"
			],
			[
				"name" => "Payments",
				"description" => "Backed by Stripe"
			],
			[
				"name" => "Website"
			]
		];

		Component::truncate();

		foreach($defaultComponents as $setting) {
			Component::create($setting);
		}
	}
}
