<?php

namespace Rochmadnf\Pm2Notification;

use Illuminate\Support\ServiceProvider;

class Pm2NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConsoleCommands();
    }

    protected function registerConsoleCommands()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Commands\InitCommand::class,
        ]);
    }
}
