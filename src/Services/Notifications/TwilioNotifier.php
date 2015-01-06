<?php

namespace CachetHQ\Cachet\Services\Notifications;

use Illuminate\Database\Eloquent\Model;

class TwilioNotifier implements NotifierInterface
{
    protected $twilio, $to, $from;
    private $message;


    /**
     * Recipients of notification.
     *
     * @param string $to The recipient
     *
     * @return CachetHQ\Cachet\Services\Notifications $this  Return self for chainability
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
     * @return CachetHQ\Cachet\Services\Notifications $this  Return self for chainability
     */
    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Send notification.
     *
     * @param string $message Notification content
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

    public function setParams($params)
    {
        $this->twilio = new \Services_Twilio($params->account_id, $params->token);
        $this->from($params->from);
        $this->to($params->to);

        return $this;
    }

    public function prepareMessage(Model $model)
    {
        $this->message = 'Status : '.$model->status.' '.$model->name.$model->message;

        return $this;
    }
}
