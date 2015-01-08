<?php

namespace CachetHQ\Cachet\Notifications;

use Illuminate\Database\Eloquent\Model;
use stdClass as stdClass;

class NotifierAbstract
{
    protected $notifier;
    protected $message;

    /**
     * Set the notifier.
     *
     * @param \CachetHQ\Cachet\Notifications\NotifierInterface $notifier
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierAbstract
     */
    public function setNotifier(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;

        return $this;
    }

    /**
     * Set params to the notifier.
     *
     * @param \stdClass $params
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierAbstract
     */
    public function setParamsToNotifier(stdClass $params)
    {
        $this->notifier->setParams($params);

        return $this;
    }

    /**
     * Send the notification.
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierAbstract
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
     * @return \CachetHQ\Cachet\Notifications\NotifierAbstract
     */
    public function prepareMessage(Model $model)
    {
        $this->message = $this->notifier->prepareMessage($model);

        return $this;
    }
}
