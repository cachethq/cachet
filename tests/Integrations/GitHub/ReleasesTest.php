<?php

namespace CachetHQ\Tests\Cachet\Integrations\GitHub\Releases;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Support\Facades\Cache;
use CachetHQ\Cachet\Integrations\GitHub\Releases;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;

class ReleasesTest extends AbstractTestCase
{
    private $request_history = [];

    /**
     * Creates Mock Guzzle client
     *
     * @param array $mock_responses list of fake response to return to HTTP requests
     */
    private function createMockClient(array $mock_responses)
    {
        $history = Middleware::history($this->request_history);
        $mock = new MockHandler($mock_responses);

        $handlerStack = HandlerStack::create($mock);
        $handlerStack->push($history);

        $client = new Client(['handler' => $handlerStack]);
        $this->app->instance(Client::class, $client);
    }

    public function test_latest_parses_response_from_github()
    {
        $file = dirname(__FILE__) . '/../payloads/github_api.json';
        $payload = file_get_contents($file);

        $mock_responses = [
            new Response(200, [], $payload),
        ];
        $this->createMockClient($mock_responses);

        Cache::tags('release.latest')->flush();
        $latest = $this->app->make(Releases::class)->latest();
        $this->assertEquals('v2.3.18', $latest['tag_name']);
    }

    public function test_latest_returns_empty_on_timeout()
    {
        $mock_responses = [
            new ConnectException('cURL error 28: Connection timed out after 5000 milliseconds', new Request('GET', 'repos/cachethq/cachet/releases/latest')),
        ];
        $this->createMockClient($mock_responses);

        Cache::tags('release.latest')->flush();
        $latest = $this->app->make(Releases::class)->latest();
        $this->assertEquals(null, $latest);
    }

    public function test_latest_does_not_make_http_request_when_enabled_false()
    {
        $mock_responses = [
            new Response(200),
        ];
        $this->createMockClient($mock_responses);

        Cache::tags('release.latest')->flush();
        $latest = $this->app->makeWith(Releases::class, ['enabled' => false])->latest();
        $this->assertEquals(null, $latest);
        $this->assertEquals(0, count($this->request_history));
    }
}
