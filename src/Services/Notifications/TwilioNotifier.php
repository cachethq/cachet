<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;
use Services_Twilio as Twilio;

class TwilioNotifier implements NotifierInterface
{
    protected $twilio, $to, $from;

    private $message;

    /**
     * Recipient of notification.
     *
     * @param string $to The recipient
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function to($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Sender of notification.
     *
     * @param string $from The sender
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Send notification.
     *
     * @return void
     */
    public function send()
    {
        $sms = $this->twilio
            ->account
            ->sms_messages
            ->create(
                $this->from,
                $this->to,
                $this->message
            );
    }

    /**
     * Set params in order to construct the request.
     *
     * @param array $params . $params comes from properties' field.
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function setParams($params)
    {
        $this->twilio = new Twilio($params->account_id, $params->token);
        $this->from($params->from);
        $this->to($params->to);

        return $this;
    }

    /**
     * You can edit the message.
     *
     * @param Model $model
     *
     * @return \CachetHQ\Cachet\Services\Notifications\NotifierInterface $this  Return self for chainability
     */
    public function prepareMessage(Model $model)
    {
        $this->message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $this;
    }
}
