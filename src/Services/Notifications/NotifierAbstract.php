<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;

class NotifierAbstract
{
    private $notifier;
    private $message;

    public function setNotifier(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;

        return $this;
    }

    public function setParamsToNotifier($params)
    {
        $this->notifier->setParams($params);

        return $this;
    }

    public function send()
    {
        $this->notifier->send($this->message);

        return $this;
    }

    public function prepareMessage(Model $model)
    {
        $this->message = $this->notifier->prepareMessage($model);

        return $this;
    }
}
