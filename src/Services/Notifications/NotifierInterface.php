<?php
namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;

interface NotifierInterface
{
    /**
     * Recipient of notification.
     *
     * @param string $to The recipient
     *
     * @return $this
     */
    public function to($to);

    /**
     * Sender of notification.
     *
     * @param string $from
     *
     * @return $this
     */
    public function from($from);

    /**
     * Send notification.
     *
     * @return void
     */
    public function send();

    /**
     * Set params in order to construct the request.
     *
     * @param array $params
     *
     * @return $this
     */
    public function setParams(array $params)

    /**
     * You can edit the message.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return $this
     */
    public function prepareMessage(Model $model)
}
