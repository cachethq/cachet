<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Maknz\Slack\Client;
use Illuminate\Database\Eloquent\Model;

class SlackNotifier implements NotifierInterface
{
    protected $client = null;
    private $message;

    public function __construct()
    {
    }

    public function from($username)
    {
        $this->client->from($username);

        return $this;
    }

    public function to($channel)
    {
        $this->client->to($channel);

        return $this;
    }

    public function send()
    {
        $this->client->send($this->message);

        return $this;
    }

    public function setParams($params)
    {
        $this->client = new Client($params);
        $this->client->setEndpoint($params->endpoint);
        $this->from($params->username);
        $this->to($params->channel);

        return $this;
    }

    public function prepareMessage(Model $model)
    {
        $this->message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $this;
    }
}
