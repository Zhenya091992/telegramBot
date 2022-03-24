<?php

// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '778407765:AAGfqcbwfHbgAlD9IGYzrBFJka0mUfYJcvQ';
$bot_username = 'Zaebot12345_bot';
$hook_url = 'https://35.184.170.195/bot/telegram_bot.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url,['certificate' => '/etc/apache2/sites-available/default-ssl.conf']);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}