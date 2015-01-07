<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;
use Services_Twilio as Twilio;

class TwilioNotifier implements NotifierInterface
{
    protected $twilio
    protected $to,
    protected $from;
    protected $message;

    /**
     * Recipient of notification.
     *
     * @param string $to The recipient
     *
     * @return $this
     */
    public function to($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Sender of notification.
     *
     * @param string $from
     *
     * @return $this
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
     * @param array $params
     *
     * @return $this
     */
    public function setParams(array $params)
    {
        $this->twilio = new Twilio($params->account_id, $params->token);
        $this->from($params->from);
        $this->to($params->to);

        return $this;
    }

    /**
     * You can edit the message.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return $this
     */
    public function prepareMessage(Model $model)
    {
        $this->message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $this;
    }
}
