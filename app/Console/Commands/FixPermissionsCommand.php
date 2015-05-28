<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console\Commands;

use DirectoryIterator;
use Illuminate\Console\Command;

class FixPermissionsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:chmod';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fixes file and directory permissions. Ensures SQLite database is writeable.';

    /**
     * Path to the storage directory.
     *
     * @var string
     */
    protected $storageDirectory;

    /**
     * Path of the database directory.
     *
     * @var string
     */
    protected $databaseDirectory;

    /**
     * Path of the SQLite database file.
     *
     * @var string
     */
    protected $databasePath;

    /**
     * Which database connection are we using?
     *
     * @var string
     */
    protected $databaseDefault;

    /**
     * Create a new fix permissions command instance.
     *
     * @param string $storageDirectory
     * @param string $databaseDirectory
     * @param string $databasePath
     * @param string $databaseDefault
     *
     * @return void
     */
    public function __construct($storageDirectory, $databaseDirectory, $databasePath, $databaseDefault)
    {
        $this->storageDirectory = $storageDirectory;
        $this->databaseDirectory = $databaseDirectory;
        $this->databasePath = $databasePath;
        $this->databaseDefault = $databaseDefault;

        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function fire()
    {
        $this->recursiveChmod($this->storageDirectory);

        if ($this->databaseDefault === 'sqlite') {
            chmod($this->databaseDirectory, 755);
            chmod($this->databasePath, 755);
        }
    }

    /**
     * Recursively sets a paths file permissions.
     *
     * @param string $path
     * @param string $mode
     */
    protected function recursiveChmod($path, $mode = '0755')
    {
        $dir = new DirectoryIterator($path);
        foreach ($dir as $item) {
            if (!$item->isDot()) {
                chmod($item->getPathname(), $mode);
            }

            if ($item->isDir() && !$item->isDot()) {
                $this->recursiveChmod($item->getPathname());
            }
        }
    }
}
