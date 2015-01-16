<?php

use CachetHQ\Cachet\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $defaultSettings = [
            [
                "name"  => "app_name",
                "value" => "Cachet Demo",
            ],
            [
                "name"  => "app_domain",
                "value" => "https://status.cachethq.io",
            ],
            [
                "name"  => "show_support",
                "value" => "1",
            ],
            [
                "name"  => "app_locale",
                "value" => "en",
            ],
            [
                "name"  => "app_timezone",
                "value" => "Europe/London",
            ],
        ];

        Setting::truncate();

        foreach ($defaultSettings as $setting) {
            Setting::create($setting);
        }
    }
}
