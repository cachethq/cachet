<?php
/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 05.09.17
 * Time: 15:03
 */

class SwisscomSMS
{


    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSwisscomSMS($notifiable);

        Log::info("SMS swisscom sent !".$message);
    }

}