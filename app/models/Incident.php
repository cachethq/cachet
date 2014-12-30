<?php

use Watson\Validating\ValidatingTrait;

class Incident extends Eloquent implements \Dingo\Api\Transformer\TransformableInterface
{
    use ValidatingTrait;
    use Illuminate\Database\Eloquent\SoftDeletingTrait;

    protected $rules = [
        'user_id'      => 'required|integer',
        'component_id' => 'integer',
        'name'         => 'required',
        'status'       => 'required|integer',
        'message'      => 'required',
    ];

    protected $fillable = ['user_id', 'component_id', 'name', 'status', 'message'];

    protected $appends = ['humanStatus'];

    /**
     * An incident belongs to a component.
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function component()
    {
        return $this->belongsTo('Component', 'component_id', 'id');
    }

    /**
     * Returns a human readable version of the status.
     * @return string
     */
    public function getHumanStatusAttribute()
    {
        $statuses = Lang::get('cachet.incident.status');

        return $statuses[$this->status];
    }

    /**
     * Finds the icon to use for each status.
     * @return string
     */
    public function getIconAttribute()
    {
        switch ($this->status) {
            case 1: return 'ion ion-flag';
            case 2: return 'ion ion-alert';
            case 3: return 'ion ion-eye';
            case 4: return 'ion ion-checkmark';
        }
    }

    /**
     * Returns a Markdown formatted version of the status.
     * @return string
     */
    public function getFormattedMessageAttribute()
    {
        $parseDown = new ParsedownExtra();

        return $parseDown->text($this->message);
    }

    /**
     * Get the transformer instance.
     * @return CachetHQ\Cachet\Transformers\IncidentTransformer
     */
    public function getTransformer()
    {
        return new CachetHQ\Cachet\Transformers\IncidentTransformer();
    }

    /**
     * Check if Incident has message.
     * @return boolean
     */
    public function hasMessage()
    {
        return (trim($this->message) !== '');
    }
}
