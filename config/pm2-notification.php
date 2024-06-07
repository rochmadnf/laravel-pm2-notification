<?php

return [
    'status' => env('PM2N_STATUS', true),

    'default' => env('PM2N_CHANNEL', 'telegram'),

    'auto_restart' => env('PM2N_AUTO_RESTART', true),

    'channels' => [
        'telegram' => [
            'token' => env('PM2N_TELEGRAM_TOKEN', null),
            'chat_id' => env('PM2N_TELEGRAM_CHAT', null),
            'sticker' => [
                'success' => env('PM2N_TELEGRAM_STICKER_CLEAR', 'CAACAgIAAxkBAAIBbmZipOt-5wsJouOqAZYXOnmP80bjAAJ9EwACo3eoS8JYOwOIb83gNQQ'),
                'failure' => env('PM2N_TELEGRAM_STICKER_FAIL', 'CAACAgIAAxkBAAIBUWZim8UEiAmu2pdLh9XV0ArfZbD8AAJnEwACVyp4ShFepw-VKGW8NQQ'),
            ],
        ],
    ]
];
