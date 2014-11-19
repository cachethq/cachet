<?php

class IncidentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$defaultIncidents = [
			[
				"name" => "Test Incident",
				"message" => "Something went wrong, oh noes."
			],
			[
				"name" => "Update",
				"message" => "We've found the problem, so we're looking at it.",
				"status" => 2
			],
			[
				"name" => "Monitoring the fix",
				"message" => "We're checking that our fix will first work.",
				"status" => 3
			],
			[
				"name" => "Awesome",
				"message" => "We totally nailed the fix.",
				"status" => 4
			]
		];

		Incident::truncate();

		foreach($defaultIncidents as $incident) {
			Incident::create($incident);
		}
	}
}
