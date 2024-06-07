<?php

namespace Rochmadnf\Pm2Notification\Commands;

use Illuminate\Console\Command;

class InitCommand extends Command
{
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

        return self::SUCCESS;
    }
}
