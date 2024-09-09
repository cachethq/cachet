<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console\Commands;

use Illuminate\Console\Command;

/**
 * This is the version command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class VersionCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display the version of Cachet';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Cachet '.CACHET_VERSION.' is installed ⚡');
    }
}
