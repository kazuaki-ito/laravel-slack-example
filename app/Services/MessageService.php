<?php
/**
 * Created by PhpStorm.
 * User: kazuaki_itoh
 * Date: 2019/07/10
 * Time: 14:30
 */

namespace App\Services;


use App\Notifications\Slack;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

class MessageService
{
    use Notifiable;

    public function send()
    {
        $this->notify(new Slack());
    }

    public function routeNotificationForSlack($notification = null)
    {
        return env('SLACK_WEBHOOK_URL');
    }
}