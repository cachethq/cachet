<?php

namespace CachetHQ\Cachet\Presenters;

use CachetHQ\Cachet\Models\Incident;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\BasePresenter;

class IncidentPresenter extends BasePresenter
{
    /**
     * Create a incident presenter instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     */
    public function __construct(Incident $incident)
    {
        $this->resource = $incident;
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function created_at_diff()
    {
        return (new Date($this->resource->created_at))->diffForHumans();
    }

    /**
     * Present formated date time.
     *
     * @return string
     */
    public function created_at_formated()
    {
        return ucfirst((new Date($this->resource->created_at))->format('l j F Y H:i:s'));
    }

    /**
     * Present formated date time.
     *
     * @return string
     */
    public function created_at_iso()
    {
        return $this->resource->created_at->toISO8601String();
    }
}
