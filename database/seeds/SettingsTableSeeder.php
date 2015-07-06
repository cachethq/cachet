<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        $defaultSettings = [
            [
                'name'  => 'app_name',
                'value' => 'Cachet Demo',
            ],
            [
                'name'  => 'app_domain',
                'value' => 'https://demo.cachethq.io',
            ],
            [
                'name'  => 'show_support',
                'value' => '1',
            ],
            [
                'name'  => 'app_locale',
                'value' => 'en',
            ],
            [
                'name'  => 'app_timezone',
                'value' => 'Europe/London',
            ],
            [
                'name'  => 'app_track',
                'value' => '1',
            ],
            [
                'name'  => 'app_incident_days',
                'value' => '7',
            ],
            [
                'name'  => 'app_analytics',
                'value' => 'UA-58442674-3',
            ],
            [
                'name'  => 'app_analytics_gs',
                'value' => 'GSN-712462-P',
            ],
            [
                'name'  => 'display_graphs',
                'value' => '1',
            ],
        ];

        Setting::truncate();

        foreach ($defaultSettings as $setting) {
            Setting::create($setting);
        }
    }
}
