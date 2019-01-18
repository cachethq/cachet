<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasCreatedEvent;
use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;

/**
 * This is the promtheus incident test class.
 *
 * @author Erik Anders <github@naugrim.org>
 */
class PrometheusIncidentTest extends AbstractApiTestCase
{
    public function test_cannot_create_incident_without_authorization()
    {
        $this->doesntExpectEvents(IncidentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/incidents/alertmanager');

        $response->assertStatus(401);
    }

    public function test_cannot_create_incident_with_missing_data()
    {
        $this->beUser();

        $this->doesntExpectEvents(IncidentWasCreatedEvent::class);

        $response = $this->json('POST', '/api/v1/incidents/alertmanager');

        $response->assertStatus(400);
    }

    public function test_cannot_create_incident_without_component_id()
    {
        $this->beUser();

        $this->doesntExpectEvents(IncidentWasCreatedEvent::class);

        $alertWithoutComponentId = [
            'receiver' => 'statuspage-receiver',
            'status'   => 'firing',
            'alerts'   => [
                    [
                        'status' => 'firing',
                        'labels' => [
                                'alertname' => 'test-rule-metrics',
                                'code'      => '200',
                                'instance'  => 'localhost:9090',
                                'job'       => 'prometheus',
                                //'status_page_component_id' => '1', //commented intentionally
                            ],
                        'annotations' => [
                                'description' => 'A Test-Message.',
                                'summary'     => 'A Test-Summary.',
                            ],
                        'startsAt'     => '2019-01-18T10:02:49.770506166Z',
                        'endsAt'       => '0001-01-01T00:00:00Z',
                        'generatorURL' => 'http://homestead:9090/graph?g0.expr=promhttp_metric_handler_requests_total+>+0&g0.tab=1',
                    ],
                ],
            'groupLabels'  => [],
            'commonLabels' => [
                    'alertname' => 'test-rule-metrics',
                    'code'      => '200',
                    'instance'  => 'localhost:9090',
                    'job'       => 'prometheus',
                    //'status_page_component_id' => '1', //commented intentionally
                ],
            'commonAnnotations' => [
                    'description' => 'A Test-Message.',
                    'summary'     => 'A Test-Summary.',
                ],
            'externalURL' => 'http://homestead:9093',
            'version'     => '4',
            'groupKey'    => '{}:{}',
        ];

        $response = $this->json('POST', '/api/v1/incidents/alertmanager', $alertWithoutComponentId);

        $response->assertStatus(400);
        $response->assertJsonFragment(['detail' => 'No status_page_component_id given.']);
    }

    public function test_can_create_incident()
    {
        $this->beUser();

        $this->expectsEvents(IncidentWasCreatedEvent::class);

        $component = factory(Component::class)->create([
            'status' => 1,
        ]);

        $alert = [
            'receiver' => 'statuspage-receiver',
            'status'   => 'firing',
            'alerts'   => [
                    [
                        'status' => 'firing',
                        'labels' => [
                                'alertname'                => 'test-rule-metrics',
                                'code'                     => '200',
                                'instance'                 => 'localhost:9090',
                                'job'                      => 'prometheus',
                                'status_page_component_id' => (string) $component->id, //commented intentionally
                            ],
                        'annotations' => [
                                'description' => 'A Test-Message.',
                                'summary'     => 'A Test-Summary.',
                            ],
                        'startsAt'     => '2019-01-18T10:02:49.770506166Z',
                        'endsAt'       => '0001-01-01T00:00:00Z',
                        'generatorURL' => 'http://homestead:9090/graph?g0.expr=promhttp_metric_handler_requests_total+>+0&g0.tab=1',
                    ],
                ],
            'groupLabels'  => [],
            'commonLabels' => [
                    'alertname'                => 'test-rule-metrics',
                    'code'                     => '200',
                    'instance'                 => 'localhost:9090',
                    'job'                      => 'prometheus',
                    'status_page_component_id' => (string) $component->id, //commented intentionally
                ],
            'commonAnnotations' => [
                    'description' => 'A Test-Message.',
                    'summary'     => 'A Test-Summary.',
                ],
            'externalURL' => 'http://homestead:9093',
            'version'     => '4',
            'groupKey'    => '{}:{}',
        ];

        $response = $this->json('POST', '/api/v1/incidents/alertmanager', $alert);
        $response->assertStatus(200);
        $incident = Incident::where('name', 'A Test-Summary.')->first();

        $this->assertEquals($component->id, $incident->component->id);

        $this->assertEquals(
            config('prometheus.new_incident_status', 1),
            $incident->status
        );

        $this->assertEquals(
            config('prometheus.new_incident_component_status', 2),
            $incident->component->status
        );
    }

    public function test_can_resolve_incident()
    {
        $this->beUser();

        $this->expectsEvents(IncidentWasUpdatedEvent::class);

        $component = factory(Component::class)->create([
            'status' => 1,
        ]);

        $alert = [
            'receiver' => 'statuspage-receiver',
            'status'   => 'firing',
            'alerts'   => [
                    [
                        'status' => 'firing',
                        'labels' => [
                                'alertname'                => 'test-rule-metrics',
                                'code'                     => '200',
                                'instance'                 => 'localhost:9090',
                                'job'                      => 'prometheus',
                                'status_page_component_id' => (string) $component->id, //commented intentionally
                            ],
                        'annotations' => [
                                'description' => 'A Test-Message.',
                                'summary'     => 'A Test-Summary.',
                            ],
                        'startsAt'     => '2019-01-18T10:02:49.770506166Z',
                        'endsAt'       => '0001-01-01T00:00:00Z',
                        'generatorURL' => 'http://homestead:9090/graph?g0.expr=promhttp_metric_handler_requests_total+>+0&g0.tab=1',
                    ],
                ],
            'groupLabels'  => [],
            'commonLabels' => [
                    'alertname'                => 'test-rule-metrics',
                    'code'                     => '200',
                    'instance'                 => 'localhost:9090',
                    'job'                      => 'prometheus',
                    'status_page_component_id' => (string) $component->id, //commented intentionally
                ],
            'commonAnnotations' => [
                    'description' => 'A Test-Message.',
                    'summary'     => 'A Test-Summary.',
                ],
            'externalURL' => 'http://homestead:9093',
            'version'     => '4',
            'groupKey'    => '{}:{}',
        ];

        $response = $this->json('POST', '/api/v1/incidents/alertmanager', $alert);
        $response->assertStatus(200);

        //now resolve the incident we just created
        $alert = [
            'receiver' => 'statuspage-receiver',
            'status'   => 'resolved',
            'alerts'   => [
                    [
                        'status' => 'resolved',
                        'labels' => [
                                'alertname'                => 'test-rule-metrics',
                                'code'                     => '200',
                                'instance'                 => 'localhost:9090',
                                'job'                      => 'prometheus',
                                'status_page_component_id' => (string) $component->id, //commented intentionally
                            ],
                        'annotations' => [
                                'description' => 'A Test-Message.',
                                'summary'     => 'A Test-Summary.',
                            ],
                        'startsAt'     => '2019-01-18T10:02:49.770506166Z',
                        'endsAt'       => '2019-01-18T11:02:49.770506166Z',
                        'generatorURL' => 'http://homestead:9090/graph?g0.expr=promhttp_metric_handler_requests_total+>+0&g0.tab=1',
                    ],
                ],
            'groupLabels'  => [],
            'commonLabels' => [
                    'alertname'                => 'test-rule-metrics',
                    'code'                     => '200',
                    'instance'                 => 'localhost:9090',
                    'job'                      => 'prometheus',
                    'status_page_component_id' => (string) $component->id, //commented intentionally
                ],
            'commonAnnotations' => [
                    'description' => 'A Test-Message.',
                    'summary'     => 'A Test-Summary.',
                ],
            'externalURL' => 'http://homestead:9093',
            'version'     => '4',
            'groupKey'    => '{}:{}',
        ];

        $response = $this->json('POST', '/api/v1/incidents/alertmanager', $alert);
        $response->assertStatus(200);

        $incident = Incident::where('name', 'A Test-Summary.')->first();

        $this->assertEquals(
            config('prometheus.resolved_incident_status', 4),
            $incident->status
        );

        $this->assertEquals(
            config('prometheus.resolved_incident_component_status', 1),
            $incident->component->status
        );
    }
}
