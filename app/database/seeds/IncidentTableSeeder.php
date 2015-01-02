<?php

use CachetHQ\Cachet\Models\Incident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class IncidentTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $defaultIncidents = [
            [
                "name"         => "Awesome",
                "message"      => "We totally nailed the fix.",
                "status"       => 4,
                "component_id" => 0,
                "user_id"      => 1,
            ],
            [
                "name"         => "Monitoring the fix",
                "message"      => "We're checking that our fix will first work.",
                "status"       => 3,
                "component_id" => 0,
                "user_id"      => 1,
            ],
            [
                "name"         => "Update",
                "message"      => "We've found the problem, so we're looking at it.",
                "status"       => 2,
                "component_id" => 0,
                "user_id"      => 1,
            ],
            [
                "name"         => "Test Incident",
                "message"      => "Something went wrong, oh noes.",
                "component_id" => 0,
                "user_id"      => 1,
            ],
        ];

        Incident::truncate();

        foreach ($defaultIncidents as $incident) {
            Incident::create($incident);
        }
    }
}
