<?php

namespace Tests\Functional\Notifications;

use CachetHQ\Cachet\Bus\Commands\Incident\CreateIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use CachetHQ\Cachet\Settings\Repository as SettingsRepository;
use CachetHQ\Cachet\Notifications\Incident\NewIncidentNotification;
use CachetHQ\Cachet\Notifications\IncidentUpdate\IncidentUpdatedNotification;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AuthyTest extends AbstractTestCase
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
     * AuthyTest constructor.
     *
     * @param null   $name
     * @param array  $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->fakerFactory = \Faker\Factory::create();
        $this->appName = 'AuthyTest';
    }

    /**
     * Setup the application.
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->app->make(SettingsRepository::class)->set('app_name', $this->appName);
        $this->app->config->set('setting.app_name', $this->appName);
        $this->incidents = [
            ['title' => 'Foo ' . Str::random(16), 'description' => 'Foo Bar Baz ' . Str::random(32)],
            ['title' => 'Foe ' . Str::random(16), 'description' => 'Foe Baz Bar ' . Str::random(32)],
        ];
    }

    /**
     * Create a new subscriber.
     */
    public function createSubscriber($subscriberPhoneNumber)
    {
        dispatch(
            new SubscribeSubscriberCommand(
                verified: true,
                phone_number: $subscriberPhoneNumber,
            )
        );

        return Subscriber::where('phone_number', '=', $subscriberPhoneNumber)->firstOrFail();
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

        dispatch(
            new CreateIncidentCommand(
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
            )
        );

        return Incident::where('name', '=', $name)->where('message', '=', $message)->firstOrFail();
    }

    /**
     * Send an SMS notification to subscribers when a new incident
     * is added.
     */
    public function testTwilioNotificationSentForNewIncident()
    {
        Notification::fake();

        $this->signIn();

        $subscriber = $this->createSubscriber($this->fakerFactory->phoneNumber);

        $response = $this->post('dashboard/incidents/create', [
            'name' => $this->fakerFactory->word,
            'status' => 1,
            'visible' => 1,
            'message' => $this->fakerFactory->paragraph,
            'notify' => 1,
        ]);

        Notification::assertSentTo(
            [$subscriber],
            NewIncidentNotification::class
        );
    }

    /**
     * Do not send an SMS if notify not checked.
     */
    public function testTwilioNotificationNotSentWhenNotifyNotCheckedForNewIncident()
    {
        Notification::fake();

        $this->signIn();

        $subscriber = $this->createSubscriber($this->fakerFactory->phoneNumber);

        $response = $this->post('dashboard/incidents/create', [
            'name' => $this->fakerFactory->word,
            'status' => 1,
            'visible' => 1,
            'message' => $this->fakerFactory->phoneNumber,
            'notify' => 0,
        ]);

        Notification::assertNotSentTo(
            [$subscriber],
            NewIncidentNotification::class
        );
    }

    /**
     * Send an SMS notification to subscribers when an incident
     * update is added.
     */
    public function testTwilioNotificationSentForIncidentUpdate()
    {
        Notification::fake();

        $this->signIn();

        $incident = $this->createIncident($this->incidents[1]);
        $subscriber = $this->createSubscriber($this->fakerFactory->phoneNumber);

        $response = $this->post('dashboard/incidents/' . $incident->id . '/updates/create', [
            'status' => 1,
            'message' => $this->fakerFactory->paragraph,
        ]);

        Notification::assertSentTo(
            [$subscriber],
            IncidentUpdatedNotification::class
        );
    }
}