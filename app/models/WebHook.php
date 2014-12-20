<?php

class WebHook extends Eloquent
{
    // Request Methods.
    const HEAD = 0;
    const GET = 1;
    const POST = 2;
    const PATCH = 3;
    const PUT = 4;
    const DELETE = 5;

    /**
     * Returns all responses for a WebHook.
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function response()
    {
        return $this->hasMany('WebHookContent', 'hook_id', 'id');
    }

    /**
     * Returns all active hooks.
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * Setups a Ping event that is fired upon a web hook.
     * @return array result of the ping
     */
    public function ping()
    {
        return $this->fire('ping', 'Coming live to you from Cachet.');
    }

    /**
     * Fires the actual web hook event.
     * @param  string $eventType the event to send X-Cachet-Event
     * @param  mixed  $data      Data to send to the Web Hook
     * @return object
     */
    public function fire($eventType, $data = null)
    {
        $startTime = microtime(true);

        $client = new \GuzzleHttp\Client();
        $request = $client->createRequest($this->requestMethod, $this->endpoint, [
            'headers' => [
                'X-Cachet-Event' => $eventType,
            ],
            'body' => $data
        ]);

        try {
            $response = $client->send($request);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Do nothing with the exception, we want it.
            $response = $e->getResponse();
        }

        $timeTaken = microtime(true) - $startTime;

        // Store the request
        $hookResponse                   = new WebHookResponse();
        $hookResponse->web_hook_id      = $this->id;
        $hookResponse->response_code    = $response->getStatusCode();
        $hookResponse->sent_headers     = json_encode($request->getHeaders());
        $hookResponse->sent_body        = json_encode($data);
        $hookResponse->recv_headers     = json_encode($response->getHeaders());
        $hookResponse->recv_body        = json_encode($response->getBody());
        $hookResponse->time_taken       = $timeTaken;
        $hookResponse->save();

        return $hookResponse;
    }

    /**
     * Returns a human readable request type name.
     * @throws Exception
     * @return string    HEAD, GET, POST, DELETE, PATCH, PUT etc
     */
    public function getRequestMethodAttribute()
    {
        $requestMethod = null;

        switch ($this->request_type) {
            case self::HEAD:
                $requestMethod = 'HEAD';
                break;
            case self::GET:
                $requestMethod = 'GET';
                break;
            case self::POST:
                $requestMethod = 'POST';
                break;
            case self::PATCH:
                $requestMethod = 'PATCH';
                break;
            case self::PUT:
                $requestMethod = 'PUT';
                break;
            case self::DELETE:
                $requestMethod = 'DELETE';
                break;

            default:
                throw new Exception('Unknown request type value: '.$this->request_type);
                break;
        }

        return $requestMethod;
    }
}
