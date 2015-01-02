<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;

class WebHookResponse extends Model
{
    /**
     * Returns the hook that a response belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hook()
    {
        return $this->belongsTo('WebHook', 'id', 'hook_id');
    }
}
