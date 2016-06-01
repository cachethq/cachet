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
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Settings\Repository;
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
    protected $description = 'Seeds Cachet with demo data.';

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
            ], [
                'name'      => 'Alt Three',
                'order'     => 2,
                'collapsed' => 1,
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
                'name'         => 'Cachet supports Markdown!',
                'message'      => $incidentMessage,
                'status'       => 4,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Awesome',
                'message'      => ':+1: We totally nailed the fix.',
                'status'       => 4,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Monitoring the fix',
                'message'      => ":ship: We've deployed a fix.",
                'status'       => 3,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Update',
                'message'      => "We've identified the problem. Our engineers are currently looking at it.",
                'status'       => 2,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Test Incident',
                'message'      => 'Something went wrong, with something or another.',
                'status'       => 1,
                'component_id' => 0,
                'scheduled_at' => null,
                'visible'      => 1,
            ],
            [
                'name'         => 'Investigating the API',
                'message'      => ':zap: We\'ve seen high response times from our API. It looks to be fixing itself as time goes on.',
                'status'       => 1,
                'component_id' => 1,
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
     * Seed the incident templates table.
     *
     * @return void
     */
    protected function seedIncidentTemplates()
    {
        IncidentTemplate::truncate();
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
            ]
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
