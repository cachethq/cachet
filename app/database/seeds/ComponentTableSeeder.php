<?php

use CachetHQ\Cachet\Models\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $defaultComponents = [
            [
                "name"        => "API",
                "description" => "Used by third-parties to connect to us",
                "status"      => 1,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "",
            ], [
                "name"        => "Payments",
                "description" => "Backed by Stripe",
                "status"      => 1,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "",
            ], [
                "name"        => "Website",
                "status"      => 1,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "",
            ],
        ];

        Component::truncate();

        foreach ($defaultComponents as $component) {
            Component::create($component);
        }
    }
}
