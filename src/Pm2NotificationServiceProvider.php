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
        $this->mergeConfigFrom(
            __DIR__ . '/../config/pm2-notification.php',
            'pm2-notification'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConsoleCommands();
        $this->publishes([
            __DIR__ . '/../config/pm2-notification.php' => config_path('pm2-notification.php'),
        ], 'pm2-notification');
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
