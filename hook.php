<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '778407765:AAGfqcbwfHbgAlD9IGYzrBFJka0mUfYJcvQ';
$bot_username = 'Zaebot12345_bot';
$botexplanation_username = 'zaebot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $botexplanation_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}
