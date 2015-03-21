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
                "status"      => 2,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "",
            ], [
                "name"        => "Documentation",
                "description" => "Kindly powered by Readme.io",
                "status"      => 1,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "https://docs.cachethq.io",
            ], [
                "name"        => "Website",
                "description" => "",
                "status"      => 1,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "https://cachethq.io",
            ], [
                "name"        => "Blog",
                "description" => "The Cachet HQ blog.",
                "status"      => 1,
                "user_id"     => 1,
                "order"       => 0,
                "group_id"    => 0,
                "link"        => "https://blog.cachethq.io",
            ],
        ];

        Component::truncate();

        foreach ($defaultComponents as $component) {
            Component::create($component);
        }
    }
}
