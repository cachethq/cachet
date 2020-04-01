<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Functional\Notifications;

use CachetHQ\Cachet\Bus\Commands\Incident\CreateIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Notifications\Incident\NewIncidentNotification;
use CachetHQ\Cachet\Notifications\IncidentUpdate\IncidentUpdatedNotification;
use CachetHQ\Cachet\Settings\Repository as SettingsRepository;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class MailTest extends AbstractTestCase
{
    use DatabaseMigrations;

    /**
     * @var \Faker\Generator
     */
    protected $fakerFactory;

    /**
     * @var string
     */
    protected $appName;

    /**
     * @var array[]|null
     */
    protected $incidents;

    /**
     * @var string
     */
    protected $subscriber;

    /**
     * MailTest constructor.
     *
     * @param null   $name
     * @param array  $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->fakerFactory = \Faker\Factory::create();
        $this->appName = 'MailTest';
    }

    /**
     * Setup the application.
     */
    public function setUp()
    {
        parent::setUp();
        $this->app->make(SettingsRepository::class)->set('app_name', $this->appName);
        $this->app->config->set('setting.app_name', $this->appName);
        $this->incidents = [
            ['title' => 'Foo '.Str::random(16), 'description' => 'Foo Bar Baz '.Str::random(32)],
            ['title' => 'Foe '.Str::random(16), 'description' => 'Foe Baz Bar '.Str::random(32)],
        ];
    }

    /**
     * Create a new subscriber.
     */
    public function createSubscriber($subscriberEmail)
    {
        dispatch(new SubscribeSubscriberCommand(
            $subscriberEmail,
            true
        ));

        return Subscriber::where('email', '=', $subscriberEmail)->firstOrFail();
    }

    /**
     * @param array $incident
     * @param array $meta
     *
     * @return Incident
     */
    protected function createIncident(array $incident)
    {
        $name = $incident['title'];
        $message = $incident['description'];

        dispatch(new CreateIncidentCommand(
            $name,
            $this->fakerFactory->numberBetween(0, 3),
            $message,
            true,
            null,
            null,
            true,
            true,
            $this->fakerFactory->date('Y-m-d H:i'),
            null,
            []
        ));

        return Incident::where('name', '=', $name)->where('message', '=', $message)->firstOrFail();
    }

    /**
     * Send an email notification to subscribers when a new incident
     * is added.
     */
    public function testEmailNotificationSentForNewIncident()
    {
        Notification::fake();

        $this->signIn();

        $subscriber = $this->createSubscriber($this->fakerFactory->safeEmail);

        $response = $this->post('dashboard/incidents/create', [
            'name'    => $this->fakerFactory->word,
            'status'  => 1,
            'visible' => 1,
            'message' => $this->fakerFactory->paragraph,
            'notify'  => 1,
        ]);

        Notification::assertSentTo(
            [$subscriber],
            NewIncidentNotification::class
        );
    }

    /**
     * Do not send an email if notify not checked.
     */
    public function testEmailNotificationNotSentWhenNotifyNotCheckedForNewIncident()
    {
        Notification::fake();

        $this->signIn();

        $subscriber = $this->createSubscriber($this->fakerFactory->safeEmail);

        $response = $this->post('dashboard/incidents/create', [
            'name'    => $this->fakerFactory->word,
            'status'  => 1,
            'visible' => 1,
            'message' => $this->fakerFactory->paragraph,
            'notify'  => 0,
        ]);

        Notification::assertNotSentTo(
            [$subscriber],
            NewIncidentNotification::class
        );
    }

    /**
     * Send an email notification to subscribers when an incident
     * update is added.
     */
    public function testEmailNotificationSentForIncidentUpdate()
    {
        Notification::fake();

        $this->signIn();

        $incident = $this->createIncident($this->incidents[1]);
        $subscriber = $this->createSubscriber($this->fakerFactory->safeEmail);

        $response = $this->post('dashboard/incidents/'.$incident->id.'/updates/create', [
            'status'  => 1,
            'message' => $this->fakerFactory->paragraph,
        ]);

        Notification::assertSentTo(
            [$subscriber],
            IncidentUpdatedNotification::class
        );
    }
}
