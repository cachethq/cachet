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
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Models\IncidentUpdate;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Settings\Repository;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Symfony\Component\Console\Input\InputOption;

/**
 * This is the demo seeder command.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DemoSeederCommand extends Command
{
    use ConfirmableTrait;

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
    protected $description = 'Seeds Cachet with demo data';

    /**
     * The settings repository.
     *
     * @var \CachetHQ\Cache\Settings\Repository
     */
    protected $settings;

    /**
     * Create a new demo seeder command instance.
     *
     * @param \CachetHQ\Cache\Settings\Repository $settings
     *
     * @return void
     */
    public function __construct(Repository $settings)
    {
        parent::__construct();

        $this->settings = $settings;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        if (!$this->confirmToProceed()) {
            return;
        }

        $this->seedComponentGroups();
        $this->seedComponents();
        $this->seedIncidents();
        $this->seedIncidentTemplates();
        $this->seedMetricPoints();
        $this->seedMetrics();
        $this->seedSchedules();
        $this->seedSettings();
        $this->seedSubscribers();
        $this->seedUsers();

        $this->info('Database seeded with demo data successfully!');
    }

    /**
     * Seed the component groups table.
     *
     * @return void
     */
    protected function seedComponentGroups()
    {
        $defaultGroups = [
            [
                'name'      => 'Websites',
                'order'     => 1,
                'collapsed' => 0,
                'visible'   => ComponentGroup::VISIBLE_AUTHENTICATED,
            ], [
                'name'      => 'Alt Three',
                'order'     => 2,
                'collapsed' => 1,
                'visible'   => ComponentGroup::VISIBLE_GUEST,
            ],
        ];

        ComponentGroup::truncate();

        foreach ($defaultGroups as $group) {
            ComponentGroup::create($group);
        }
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
                'group_id'    => 1,
                'link'        => 'https://docs.cachethq.io',
            ], [
                'name'        => 'Website',
                'description' => '',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 1,
                'link'        => 'https://cachethq.io',
            ], [
                'name'        => 'Blog',
                'description' => 'The Alt Three Blog.',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 2,
                'link'        => 'https://blog.alt-three.com',
            ], [
                'name'        => 'StyleCI',
                'description' => 'The PHP Coding Style Service.',
                'status'      => 1,
                'order'       => 1,
                'group_id'    => 2,
                'link'        => 'https://styleci.io',
            ], [
                'name'        => 'Patreon Page',
                'description' => 'Support future development of Cachet.',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://patreon.com/jbrooksuk',
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
        $incidentMessage = <<<'EINCIDENT'
# Of course it does!

What kind of web application doesn't these days?

## Headers are fun aren't they

It's _exactly_ why we need Markdown. For **emphasis** and such.
EINCIDENT;

        $defaultIncidents = [
            [
                'name'         => 'Our monkeys aren\'t performing',
                'message'      => 'We\'re investigating an issue with our monkeys not performing as they should be.',
                'status'       => Incident::INVESTIGATING,
                'component_id' => 0,
                'visible'      => 1,
                'stickied'     => false,
                'occurred_at'  => Carbon::now(),
            ],
            [
                'name'         => 'This is an unresolved incident',
                'message'      => 'Unresolved incidents are left without a **Fixed** update.',
                'status'       => Incident::INVESTIGATING,
                'component_id' => 0,
                'visible'      => 1,
                'stickied'     => false,
                'occurred_at'  => Carbon::now(),
            ],
        ];

        Incident::truncate();
        IncidentUpdate::truncate();

        foreach ($defaultIncidents as $defaultIncident) {
            $incident = Incident::create($defaultIncident);

            $this->seedIncidentUpdates($incident);
        }
    }

    /**
     * Seed the incident templates table.
     *
     * @return void
     */
    protected function seedIncidentTemplates()
    {
        IncidentTemplate::truncate();
    }

    /**
     * Seed the incident updates table for a given incident.
     *
     * @return void
     */
    protected function seedIncidentUpdates($incident)
    {
        $defaultUpdates = [
            1 => [
                [
                    'status'  => Incident::FIXED,
                    'message' => 'The monkeys are back and rested!',
                    'user_id' => 1,
                ], [
                    'status'  => Incident::WATCHED,
                    'message' => 'Our monkeys need a break from performing. They\'ll be back after a good rest.',
                    'user_id' => 1,
                ], [
                    'status'  => Incident::IDENTIFIED,
                    'message' => 'We have identified the issue with our lovely performing monkeys.',
                    'user_id' => 1,
                ],
            ],
            2 => [
                [
                    'status'  => Incident::WATCHED,
                    'message' => 'We\'re actively watching this issue, so it remains unresolved.',
                    'user_id' => 1,
                ],
            ],
        ];

        $updates = $defaultUpdates[$incident->id];

        foreach ($updates as $updateId => $update) {
            $update['incident_id'] = $incident->id;

            IncidentUpdate::create($update);
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

            MetricPoint::create([
                'metric_id'  => 1,
                'value'      => random_int(1, 10),
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
     * Seed the schedules table.
     *
     * @return void
     */
    protected function seedSchedules()
    {
        $defaultSchedules = [
            [
                'name'         => 'Demo resets every half hour!',
                'message'      => 'You can schedule downtime for _your_ service!',
                'status'       => Schedule::UPCOMING,
                'scheduled_at' => (new DateTime())->add(new DateInterval('PT2H')),
            ],
        ];

        foreach ($defaultSchedules as $schedule) {
            Schedule::create($schedule);
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
                'key'   => 'app_name',
                'value' => 'Cachet Demo',
            ], [
                'key'   => 'app_domain',
                'value' => 'https://demo.cachethq.io',
            ], [
                'key'   => 'show_support',
                'value' => '1',
            ], [
                'key'   => 'app_locale',
                'value' => 'en',
            ], [
                'key'   => 'app_timezone',
                'value' => 'Europe/London',
            ], [
                'key'   => 'app_incident_days',
                'value' => '7',
            ], [
                'key'   => 'app_analytics',
                'value' => 'UA-58442674-3',
            ], [
                'key'   => 'app_analytics_gs',
                'value' => 'GSN-712462-P',
            ], [
                'key'   => 'display_graphs',
                'value' => '1',
            ], [
                'key'   => 'app_about',
                'value' => 'This is the demo instance of [Cachet](https://cachethq.io?ref=demo). The open source status page system, for everyone. An [Alt Three](https://alt-three.com) product.',
            ], [
                'key'   => 'enable_subscribers',
                'value' => '0',
            ],
        ];

        $this->settings->clear();

        foreach ($defaultSettings as $setting) {
            $this->settings->set($setting['key'], $setting['value']);
        }
    }

    /**
     * Seed the subscribers.
     *
     * @return void
     */
    protected function seedSubscribers()
    {
        Subscriber::truncate();
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
                'level'    => User::LEVEL_ADMIN,
                'api_key'  => '9yMHsdioQosnyVK4iCVR',
            ],
        ];

        User::truncate();

        foreach ($users as $user) {
            User::create($user);
        }
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production.'],
        ];
    }
}
