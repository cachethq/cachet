<?php

namespace CachetHQ\Cachet\Notifications;

use Illuminate\Database\Eloquent\Model;
use Maknz\Slack\Client;
use stdClass as stdClass;

class SlackNotifier implements NotifierInterface
{
    protected $client;
    protected $message;

    /**
     * Recipients of notification.
     *
     * @param string $to The recipient
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
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
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function from($username)
    {
        $this->client->from($username);

        return $this;
    }

    /**
     * Send notification.
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function send()
    {
        $this->client->send($this->message);

        return $this;
    }

    /**
     * Set params in order to construct the request.
     *
     * @param \stdClass $params
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function setParams(stdClass $params)
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
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function prepareMessage(Model $model)
    {
        $this->message = trans('dashboard.notifications.message',
            [
                'name'    => $model->name,
                'message' => $model->message,
                'status'  => $model->status
            ]
        );

        return $this;
    }
}
