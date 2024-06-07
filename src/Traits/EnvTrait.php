<?php

namespace Rochmadnf\Pm2Notification\Traits;

use Illuminate\Support\Str;
use Rochmadnf\Pm2Notification\Exceptions\EnvFileNotExists;

trait EnvTrait
{
    protected function getPath(): string
    {
        $path = base_path('.env');
        if (!file_exists($path)) {
            throw new EnvFileNotExists('The .env file doesn\'t exists. Please provide the .env file before using this command.');
        }
        return $path;
    }
    public function getEnv(): string
    {
        return file_get_contents($this->getPath());
    }
    public function setEnv(string $key, string $value)
    {
        $envFile = $this->getEnv();

        if (false === Str::contains($envFile, $key)) {
            file_put_contents($this->getPath(), $envFile . "{$key}={$value}" . PHP_EOL);
            return true;
        } else {
            file_put_contents($this->getPath(), preg_replace(
                "/{$key}=.*/",
                "{$key}={$value}",
                $this->getEnv()
            ));
            return true;
        }
    }
}
