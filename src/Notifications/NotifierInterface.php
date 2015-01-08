<?php
namespace CachetHQ\Cachet\Notifications;

use Illuminate\Database\Eloquent\Model;
use stdClass as stdClass;

interface NotifierInterface
{
    /**
     * Recipient of notification.
     *
     * @param string $to The recipient
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function to($to);

    /**
     * Sender of notification.
     *
     * @param string $from
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function from($from);

    /**
     * Send notification.
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function send();

    /**
     * Set params in order to construct the request.
     *
     * @param \stdClass $params
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function setParams(stdClass $params);

    /**
     * You can edit the message.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return \CachetHQ\Cachet\Notifications\NotifierInterface
     */
    public function prepareMessage(Model $model);
}
