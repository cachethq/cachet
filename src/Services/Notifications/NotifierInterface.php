<?php
namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;

interface NotifierInterface
{
    /**
     * Recipients of notification.
     *
     * @param string $to The recipient
     *
     * @return CachetHQ\Cachet\Services\Notifications $this  Return self for chainability
     */
    public function to($to);
    /**
     * Sender of notification.
     *
     * @param string $from The sender
     *
     * @return CachetHQ\Cachet\Services\Notifications $this  Return self for chainability
     */
    public function from($from);
    /**
     * Send notification.
     *
     *
     * @return void
     */
    public function send();

    public function setParams($params);

    public function prepareMessage(Model $model);
}
