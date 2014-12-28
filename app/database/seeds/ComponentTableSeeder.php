<?php

class ComponentTableSeeder extends Seeder
{
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
                "name"        => "API",
                "description" => "Used by third-parties to connect to us",
                "status"      => 1,
                "user_id"     => 1,
            ], [
                "name"        => "Payments",
                "description" => "Backed by Stripe",
                "status"      => 1,
                "user_id"     => 1
            ], [
                "name"    => "Website",
                "status"  => 1,
                "user_id" => 1
            ],
        ];

        Component::truncate();

        foreach ($defaultComponents as $component) {
            Component::create($component);
        }
    }
}
