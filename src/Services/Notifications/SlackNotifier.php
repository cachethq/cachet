<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;
use Maknz\Slack\Client;

class SlackNotifier implements NotifierInterface
{
    protected $client;
    protected $message;

    /**
     * Recipients of notification.
     *
     * @param string $to The recipient
     *
     * @return $this
     */
    public function to($channel)
    {
        $this->client->to($channel);

        return $this;
    }

    /**
     * Sender of notification.
     *
     * @param string $from
     *
     * @return $this
     */
    public function from($username)
    {
        $this->client->from($username);

        return $this;
    }

    /**
     * Send notification.
     *
     * @return void
     */
    public function send()
    {
        $this->client->send($this->message);

        return $this;
    }

    /**
     * Set params in order to construct the request.
     *
     * @param array $params
     *
     * @return $this
     */
    public function setParams(array $params)
    {
        $this->client = new Client($params);
        $this->client->setEndpoint($params->endpoint);
        $this->from($params->username);
        $this->to($params->channel);

        return $this;
    }

    /**
     * You can edit the message.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return $this
     */
    public function prepareMessage(Model $model)
    {
        $this->message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $this;
    }
}
