<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\System\Config;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;
use CachetHQ\Cachet\Bus\Commands\System\Config\UpdateConfigCommand;

/**
 * This is the update config command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateConfigCommandHandler
{
    /**
     * Handle update config command handler instance.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\System\Config\UpdateConfigCommand $command
     *
     * @return void
     */
    public function handle(UpdateConfigCommand $command)
    {
        foreach ($command->values as $setting => $value) {
            $this->writeEnv($setting, $value);
        }
    }

    /**
     * Writes to the .env file with given parameters.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    protected function writeEnv($key, $value)
    {
        $dir = app()->environmentPath();
        $file = app()->environmentFile();
        $path = "{$dir}/{$file}";

        try {
            (new Dotenv($dir, $file))->load();

            $envKey = strtoupper($key);
            $envValue = env($envKey) ?: 'null';

            file_put_contents($path, str_replace(
                "{$envKey}={$envValue}",
                "{$envKey}={$value}",
                file_get_contents($path)
            ));
        } catch (InvalidPathException $e) {
            throw $e;
        }
    }
}
