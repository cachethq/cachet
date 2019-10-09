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

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use CachetHQ\Cachet\Settings\Repository as SettingsRepository;
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use Mail;

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
    }

    public function createSubscriber()
    {
        dispatch(new SubscribeSubscriberCommand(
            $this->fakerFactory->safeEmail,
            true
        ));
    }

    /**
     * Send a notification to subscribers when a new incident
     * is added.
     */
    public function testNotificationSentForNewIncident()
    {
        Mail::fake();

        $this->signIn();
        $this->createSubscriber();

        $response = $this->post('dashboard/incidents/create', [
            'name' => $this->fakerFactory->word,
            'status' => 1,
            'visible' => 1,
            'message' => $this->fakerFactory->paragraph,
            'notify' => 1
        ]);
  
        Mail::assertSent(NewIncidentNotification::class);
    }
}