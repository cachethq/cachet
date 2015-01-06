<?php

namespace CachetHQ\Cachet\Models\Observers;

use CachetHQ\Cachet\Models\Service;
use CachetHQ\Cachet\Services\Notifications\NotifierAbstract;

class IncidentObserver
{
    public function saved($model)
    {
        $services = Service::where('active', 1)->get();

        foreach ($services as $service) {
            $properties = $service->properties;

            $notifier = new NotifierAbstract();
            $classname = 'CachetHQ\\Cachet\\Services\\Notifications\\'.$properties->notifierName;
            $notifier = $notifier->setNotifier(new $classname());
            $notifier->setParamsToNotifier($properties);
            $message = $notifier->prepareMessage($model);
            $notifier->send($message);
        }
    }
}
