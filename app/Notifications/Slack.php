<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class Slack extends Notification
{
    use Queueable;

    public function __construct()
    {

    }


    public function via($notifiable)
    {
        return ['slack'];
    }


    public function toArray($notifiable)
    {
        return [];
    }

    public function toSlack()
    {
        return (new SlackMessage())
            ->from(env('SLACK_USERNAME'))
            ->to(env('SLACK_CHANNEL'))
            ->content("テスト");
    }
}
