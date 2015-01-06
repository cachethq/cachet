<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Maknz\Slack\Client;
use Illuminate\Database\Eloquent\Model;

class SlackNotifier implements NotifierInterface
{
    protected $client = null;
    private $message;


    /**
     * Sender of notification.
     *
     * @param string $from The sender
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function from($username)
    {
        $this->client->from($username);

        return $this;
    }

    /**
     * Recipient of notification.
     *
     * @param string $to The recipient
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function to($channel)
    {
        $this->client->to($channel);

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
     * Set params in order to construct the request
     *
     * @param array $params . $params comes from properties' field.
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function setParams($params)
    {
        $this->client = new Client($params);
        $this->client->setEndpoint($params->endpoint);
        $this->from($params->username);
        $this->to($params->channel);

        return $this;
    }

    /**
     * You can edit the message
     *
     * @param Model $model
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function prepareMessage(Model $model)
    {
        $this->message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $this;
    }
}
