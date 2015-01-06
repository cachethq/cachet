<?php

namespace CachetHQ\Cachet\Services\Notifications;

class NotifierAbstract
{
    private $notifier;
    private $params = [];

    public function __construct()
    {
    }

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

    public function send($message)
    {
        $this->notifier->send($message);

        return $this;
    }

    public function prepareMessage(\Illuminate\Database\Eloquent\Model $model)
    {
        return $this->notifier->prepareMessage($model);
    }
}
