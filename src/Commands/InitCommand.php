<?php

namespace Rochmadnf\Pm2Notification\Commands;

use Illuminate\Console\Command;
use Rochmadnf\Pm2Notification\Commands\Channels\Telegram as TelegramChannel;
use Rochmadnf\Pm2Notification\Exceptions\ChannelNotExists;

class InitCommand extends Command
{
    use TelegramChannel;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pm2n:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize PM2 Notification to your project';

    public function handle(): int
    {
        $this->info('Initialize PM2 Notification.');

        $channel = $this->choice('Which channel would you like to use?', [
            'telegram',
        ], 0);

        match ($channel) {
            'telegram' => $this->setTegramChannel(),
            default => throw new ChannelNotExists('The selected channel doesn\'t exists right now. Please select the available channel.'),
        };

        $this->info('Set env has successfully 🎉');

        return self::SUCCESS;
    }
}
