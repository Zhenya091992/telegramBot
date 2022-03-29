<?php

error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '778407765:AAGfqcbwfHbgAlD9IGYzrBFJka0mUfYJcvQ';
$bot_username = 'Zaebot12345_bot';
$hook_url = 'https://35.184.170.195/bot/telegram_bot.php';
$bot_usernameexplanation = 'это бот';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_usernameexplanation);

    // Set webhook
    $telegram->setWebhook($hook_url,['certificate' => '/etc/ssl/certs/apache-selfsigned.crt']);
    $command = new \Longman\TelegramBot\Commands\SystemCommands\StartCommand($telegram);
    $command->replyToChat('sfwefwefwef');

} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
    // log telegram errors
    // echo $e->getMessage();
}