<?php
namespace CachetHQ\Cachet\Services\Notifications;

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
     * @param string $message Notification content
     *
     * @return void
     */
    public function send($message);

    public function setParams($params);

    public function prepareMessage(\Illuminate\Database\Eloquent\Model $model);
}
