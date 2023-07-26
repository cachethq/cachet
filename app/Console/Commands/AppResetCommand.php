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
use Illuminate\Contracts\Events\Dispatcher;

/**
 * This is the app reset command.
 *
 * @author James Brooks <james@alt-three.com>
 */
class AppResetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resets and installs the application';

    /**
     * The events instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected $events;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Dispatcher $events)
    {
        $this->events = $events;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->events->dispatch('command.resetting', $this);
        $this->events->dispatch('command.generatekey', $this);
        $this->events->dispatch('command.cacheconfig', $this);
        $this->events->dispatch('command.cacheroutes', $this);
        $this->events->dispatch('command.publishvendors', $this);
        $this->events->dispatch('command.resetmigrations', $this);
        $this->events->dispatch('command.runmigrations', $this);
        $this->events->dispatch('command.runseeding', $this);
        $this->events->dispatch('command.updatecache', $this);
        $this->events->dispatch('command.extrastuff', $this);
        $this->events->dispatch('command.reset', $this);
    }
}
