<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console\Commands;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use DateInterval;
use DateTime;
use Illuminate\Console\Command;

/**
 * This is the demo seeder command.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DemoSeederCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds Cachet with demo data.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->seedComponents();
        $this->seedIncidents();
        $this->seedMetricPoints();
        $this->seedMetrics();
        $this->seedSettings();
        $this->seedUsers();
    }

    /**
     * Seed the components table.
     *
     * @return void
     */
    protected function seedComponents()
    {
        $defaultComponents = [
            [
                'name'        => 'API',
                'description' => 'Used by third-parties to connect to us',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => '',
            ], [
                'name'        => 'Documentation',
                'description' => 'Kindly powered by Readme.io',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://docs.cachethq.io',
            ], [
                'name'        => 'Website',
                'description' => '',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://cachethq.io',
            ], [
                'name'        => 'Blog',
                'description' => 'The Cachet Blog.',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://blog.cachethq.io',
            ],
        ];

        Component::truncate();

        foreach ($defaultComponents as $component) {
            Component::create($component);
        }
    }

    /**
     * Seed the incidents table.
     *
     * @return void
     */
    protected function seedIncidents()
    {
        $defaultIncidents = [
            [
                'name'         => 'Awesome',
                'message'      => 'We totally nailed the fix :smile:',
                'status'       => 4,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Monitoring the fix',
                'message'      => "We're checking that our fix will first work.",
                'status'       => 3,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Update',
                'message'      => "We've found the problem, so we're looking at it.",
                'status'       => 2,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Test Incident',
                'message'      => 'Something went wrong, oh noes.',
                'status'       => 1,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
        ];

        Incident::truncate();

        foreach ($defaultIncidents as $incident) {
            Incident::create($incident);
        }
    }

    /**
     * Seed the metric points table.
     *
     * @return void
     */
    protected function seedMetricPoints()
    {
        MetricPoint::truncate();

        // Generate 11 hours of metric points
        for ($i = 0; $i < 11; $i++) {
            $metricTime = (new DateTime())->sub(new DateInterval('PT'.$i.'H'));

            $point = MetricPoint::create([
                'metric_id'  => 1,
                'value'      => rand(1, 10),
                'created_at' => $metricTime,
                'updated_at' => $metricTime,
            ]);
        }
    }

    /**
     * Seed the metrics table.
     *
     * @return void
     */
    protected function seedMetrics()
    {
        $defaultMetrics = [
            [
                'name'          => 'Cups of coffee',
                'suffix'        => 'Cups',
                'description'   => 'How many cups of coffee we\'ve drank.',
                'default_value' => 0,
                'calc_type'     => 1,
                'display_chart' => 1,
            ],
        ];

        Metric::truncate();

        foreach ($defaultMetrics as $metric) {
            Metric::create($metric);
        }
    }

    /**
     * Seed the settings table.
     *
     * @return void
     */
    protected function seedSettings()
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

    /**
     * Seed the users table.
     *
     * @return void
     */
    protected function seedUsers()
    {
        $users = [
            [
                'username' => 'test',
                'password' => 'test123',
                'email'    => 'test@test.com',
                'level'    => 1,
                'api_key'  => '9yMHsdioQosnyVK4iCVR',
            ],
        ];

        User::truncate();

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
