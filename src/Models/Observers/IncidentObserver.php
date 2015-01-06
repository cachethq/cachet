<?php

namespace CachetHQ\Cachet\Models\Observers;

use CachetHQ\Cachet\Models\Service;
use CachetHQ\Cachet\Services\Notifications\NotifierAbstract;

class IncidentObserver
{
    /**
     * When an Incident is saved (created or updated) this event is triggered.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * return void
     */
    public function saved($model)
    {
        $services = Service::where('active', 1)->get();

        foreach ($services as $service) {
            $properties = $service->properties;

            $notifier = new NotifierAbstract();
            $classname = 'CachetHQ\\Cachet\\Services\\Notifications\\'.$properties->notifierName;
            $notifier->setNotifier(new $classname())
                     ->setParamsToNotifier($properties)
                     ->prepareMessage($model)
                     ->send();
        }
    }
}
