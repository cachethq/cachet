<?php

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $defaultSettings = [
            [
                "name"  => "app_name",
                "value" => "Test",
            ],
            [
                "name"  => "app_domain",
                "value" => "cachet.dev"
            ],
            [
                "name"  => "show_support",
                "value" => "1"
            ],
        ];

        Setting::truncate();

        foreach ($defaultSettings as $setting) {
            Setting::create($setting);
        }
    }
}
