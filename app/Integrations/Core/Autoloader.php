<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Core;

use CachetHQ\Cachet\Integrations\Contracts\Autoloader as AutoloaderContract;
use CachetHQ\Cachet\Integrations\Exceptions\Autoloader\DumpFailedException;
use Symfony\Component\Process\Process;

class Autoloader implements AutoloaderContract
{
    /**
     * The base composer command.
     *
     * @var string
     */
    protected $composer;

    /**
     * Create a new autoloader instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->composer = $this->locateComposer();
    }

    /**
     * Updates the autoloader.
     *
     * @return void
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Autoloader\UpdateFailedException
     */
    public function update()
    {
        $process = $this->createProcess();

        $process->setCommandLine("{$this->composer} update --lock");

        try {
            $process->mustRun();
        } catch (Exception $e) {
            throw new UpdateFailedException();
        }
    }

    /**
     * Locate the composer cli tool.
     *
     * @return string
     */
    protected function locateComposer()
    {
        $phar = base_path('composer.phar');

        if (file_exists($phar)) {
            return "\"${PHP_BINARY}\" \"${phar}\"";
        }

        return 'composer';
    }

    /**
     * Create the process.
     *
     * @return \Symfony\Component\Process\Process
     */
    protected function createProcess()
    {
        return (new Process('', base_path()))->setTimeout(null);
    }
}
