<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Functional\Bus\Commands\Incident;

use CachetHQ\Cachet\Bus\Commands\Incident\CreateIncidentCommand;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Presenters\IncidentPresenter;
use CachetHQ\Cachet\Settings\Repository as SettingsRepository;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * This is the create incident command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class MetaSeoTest extends AbstractTestCase
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
     * CreateIncidentCommandTest constructor.
     *
     * @param null   $name
     * @param array  $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->fakerFactory = \Faker\Factory::create();
        $this->appName = 'MetaSeoTest';
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

    /**
     * When using a custom meta description in an incident it will be
     * showed in two meta tags on the incident details page.
     */
    public function testCustomSeoDescriptionOnIncidentPage()
    {
        $expectedDescription = htmlspecialchars($this->fakerFactory->sentence);

        $incident = $this->createIncidentWithMeta(['seo' => ['description' => $expectedDescription]]);
        $page = $this->get(sprintf('/incidents/%d', $incident->id));

        $this->assertContains(
            sprintf('<meta property="og:description" content="%s">', $expectedDescription),
            $page->content()
        );
        $this->assertContains(
            sprintf('<meta name="description" content="%s">', $expectedDescription),
            $page->content()
        );
    }

    /**
     * When using a custom meta title in an incident it will be
     * showed in two meta tags on the incident details page.
     */
    public function testCustomSeoTitleOnIncidentPage()
    {
        $title = htmlspecialchars($this->fakerFactory->title);

        $incident = $this->createIncidentWithMeta(['seo' => ['title' => $title]]);
        $page = $this->get(sprintf('/incidents/%d', $incident->id));

        $this->assertContains(
            sprintf('<meta property="og:title" content="%s | %s">', $title, $this->appName),
            $page->content()
        );
        $this->assertContains(
            sprintf('<title>%s | %s</title>', $title, $this->appName),
            $page->content()
        );
    }

    /**
     * When using no custom meta description in an incident, the application
     * default generated description will be used on the incident details page.
     */
    public function testNoCustomSeoDescriptionOnIncidentPage()
    {
        $incident = $this->createIncidentWithMeta([]);
        $presenter = $this->app->make(IncidentPresenter::class);
        $presenter->setWrappedObject($incident);

        $expectedDescription = sprintf(
            'Details and updates about the %s incident that occurred on %s',
            htmlspecialchars($incident->name),
            $presenter->occurred_at_formatted
        );

        $page = $this->get(sprintf('/incidents/%d', $incident->id));

        $this->assertContains(
            sprintf('<meta property="og:description" content="%s">', $expectedDescription),
            $page->content()
        );
        $this->assertContains(
            sprintf('<meta name="description" content="%s">', $expectedDescription),
            $page->content()
        );
    }

    /**
     * When using no custom meta description in an incident, the application
     * default generated description will be used on the incident details page.
     */
    public function testNoCustomSeoTitleOnIncidentPage()
    {
        $incident = $this->createIncidentWithMeta([]);
        $expectedTitle = sprintf('%s | %s', htmlspecialchars($incident->name), $this->appName);

        $page = $this->get(sprintf('/incidents/%d', $incident->id));

        $this->assertContains(
            sprintf('<meta property="og:title" content="%s">', $expectedTitle),
            $page->content()
        );
        $this->assertContains(sprintf('<title>%s</title>', $expectedTitle), $page->content());
    }

    /**
     * @param array $meta
     *
     * @return Incident
     */
    protected function createIncidentWithMeta(array $meta)
    {
        $this->signIn();
        $name = $this->fakerFactory->name;
        $message = $this->fakerFactory->sentence;

        dispatch(new CreateIncidentCommand(
            $name,
            $this->fakerFactory->numberBetween(0, 3),
            $message,
            $this->fakerFactory->boolean,
            null,
            null,
            false,
            $this->fakerFactory->boolean,
            $this->fakerFactory->date('Y-m-d H:i'),
            null,
            [],
            $meta
        ));

        return Incident::where('name', '=', $name)->where('message', '=', $message)->firstOrFail();
    }
}
