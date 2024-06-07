<?php

namespace Rochmadnf\Pm2Notification\Commands\Channels;

use Rochmadnf\Pm2Notification\Traits\EnvTrait;

trait Telegram
{
    use EnvTrait;

    public function setTegramChannel()
    {
        $data = [
            'token' => $this->ask('Configure token of your telegram bot'),
            'chat_id' => $this->ask('Configure your chat id'),
        ];

        $this->setEnv('PM2N_CHANNEL', 'telegram');
        $this->setEnv('PM2N_TELEGRAM_TOKEN', $data['token']);
        $this->setEnv('PM2N_TELEGRAM_CHAT', $data['chat_id']);

        return true;
    }
}
