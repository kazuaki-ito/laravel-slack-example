 
## Slackにメッセージ送信
 
### ①Guzzle HTTP / Slack通知チャンネル をインストール
 
```
composer require guzzlehttp/guzzle
composer require laravel/slack-notification-channel

```

### ② Notification生成


```
php artisan make:notification Slack

# ${project_root}/app/Notifivatoins/Slack

```

### ③ env

```
SLACK_CHANNEL=
SLACK_NAME=
SLACK_WEBHOOK_URL=

```



### 参考

https://readouble.com/laravel/5.7/ja/notifications.html