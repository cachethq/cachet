<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Maknz\Slack\Client;

class SlackNotifier implements NotifierInterface
{
    protected $client = null;

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

    public function send($message)
    {
        $this->client->send($message);

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
    //$model = incident
    public function prepareMessage(\Illuminate\Database\Eloquent\Model $model)
    {
        $message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $message;
    }
}
