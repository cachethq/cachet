<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;

class NotifierAbstract
{
    private $notifier;
    private $message;

    /**
     * Set the Notifier
     *
     * @param NotifierInterface $notifier
     *
     * @return $this
     */
    public function setNotifier(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;

        return $this;
    }

    /**
     * Set Params to the notifier
     *
     * @param $params
     *
     * @return $this
     */
    public function setParamsToNotifier($params)
    {
        $this->notifier->setParams($params);

        return $this;
    }

    /**
     * Send the notification
     *
     * @return $this
     */
    public function send()
    {
        $this->notifier->send($this->message);

        return $this;
    }

    /**
     * This function is used to prepare the message
     *
     * @param Model $model
     *
     * @return $this
     */
    public function prepareMessage(Model $model)
    {
        $this->message = $this->notifier->prepareMessage($model);

        return $this;
    }
}
