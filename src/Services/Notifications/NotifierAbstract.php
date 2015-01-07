<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;

class NotifierAbstract
{
    protected $notifier;
    protected $message;

    /**
     * Set the notifier.
     *
     * @param \CachetHQ\Cachet\Services\Notifications\NotifierInterface $notifier
     *
     * @return $this
     */
    public function setNotifier(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;

        return $this;
    }

    /**
     * Set params to the notifier.
     *
     * @param array $params
     *
     * @return $this
     */
    public function setParamsToNotifier(array $params)
    {
        $this->notifier->setParams($params);

        return $this;
    }

    /**
     * Send the notification.
     *
     * @return $this
     */
    public function send()
    {
        $this->notifier->send($this->message);

        return $this;
    }

    /**
     * This function is used to prepare the message.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return $this
     */
    public function prepareMessage(Model $model)
    {
        $this->message = $this->notifier->prepareMessage($model);

        return $this;
    }
}
