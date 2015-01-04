<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int            $id
 * @property int            $hook_id
 * @property int            $response_code
 * @property string         $sent_headers
 * @property string         $sent_body
 * @property string         $recv_headers
 * @property string         $recv_body
 * @property float          $time_taken
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class WebHookResponse extends Model
{
    /**
     * Returns the hook that a response belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hook()
    {
        return $this->belongsTo('CachetHQ\Cachet\Models\WebHook', 'id', 'hook_id');
    }
}
