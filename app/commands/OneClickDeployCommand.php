<?php

use Illuminate\Console\Command;

class OneClickDeployCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:one-click-deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs CachetHQ on one click supported services';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        // Define all one click environments.
        if (App::environment('heroku')) {
            Artisan::call('migrate');
            $this->info('Migrations installed.');
        }

        $this->info('Please run "php artisan migrate" to finish the installation...');
    }
}
