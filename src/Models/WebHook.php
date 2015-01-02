<?php

namespace CachetHQ\Cachet\Models;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $name
 * @property string $endpoint
 * @property int    $hook_type
 * @property int    $request_type
 * @property int    $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class WebHook extends Model
{
    const HEAD = 0;
    const GET = 1;
    const POST = 2;
    const PATCH = 3;
    const PUT = 4;
    const DELETE = 5;

    /**
     * Returns all responses for a WebHook.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function response()
    {
        return $this->hasMany('WebHookContent', 'hook_id', 'id');
    }

    /**
     * Returns all active hooks.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query)
    {
        return $query->where('active', 1);
    }

    /**
     * Setups a ping event that is fired upon a web hook.
     *
     * @return \CachetHQ\Cachet\Models\WebHookResponse
     */
    public function ping()
    {
        return $this->fire('ping', 'Coming live to you from Cachet.');
    }

    /**
     * Fires the actual web hook event.
     *
     * @param string $eventType The event to send X-Cachet-Event
     * @param string $data      Data to send to the Web Hook
     *
     * @return \CachetHQ\Cachet\Models\WebHookResponse
     */
    public function fire($eventType, $data)
    {
        $startTime = microtime(true);

        $client = new Client();
        $request = $client->createRequest($this->requestMethod, $this->endpoint, [
            'headers' => [
                'X-Cachet-Event' => $eventType,
            ],
            'body' => $data
        ]);

        try {
            $response = $client->send($request);
        } catch (ClientException $e) {
            // Do nothing with the exception, we want it.
            $response = $e->getResponse();
        }

        $timeTaken = microtime(true) - $startTime;

        // Store the request
        $hookResponse = new WebHookResponse();
        $hookResponse->web_hook_id = $this->id;
        $hookResponse->response_code = $response->getStatusCode();
        $hookResponse->sent_headers = json_encode($request->getHeaders());
        $hookResponse->sent_body = json_encode($data);
        $hookResponse->recv_headers = json_encode($response->getHeaders());
        $hookResponse->recv_body = json_encode($response->getBody());
        $hookResponse->time_taken = $timeTaken;
        $hookResponse->save();

        return $hookResponse;
    }

    /**
     * Returns a human readable request type name.
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getRequestMethodAttribute()
    {
        switch ($this->request_type) {
            case self::HEAD:
                return 'HEAD';
            case self::GET:
                return 'GET';
            case self::POST:
                return 'POST';
            case self::PATCH:
                return 'PATCH';
            case self::PUT:
                return 'PUT';
            case self::DELETE:
                return 'DELETE';
            default:
                throw new Exception('Unknown request type value: '.$this->request_type);
        }
    }
}
