<?php

namespace CachetHQ\Cachet\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class OneClickDeployCommand extends Command
{
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
     * Should we run the migrations?
     *
     * @var bool
     */
    protected $migrate;

    /**
     * Create a new one click deploy command instance.
     *
     * @param bool $migrate
     *
     * @return void
     */
    public function __construct($migrate)
    {
        $this->migrate = $migrate;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function fire()
    {
        if ($this->migrate) {
            return $this->runMigrations();
        }

        $this->info('Please run "php artisan migrate" to finish the installation.');
    }

    /**
     * Run the migrations.
     *
     * @return int|null
     */
    protected function runMigrations()
    {
        $options = [
            '--database' => $this->input->getOption('database'),
            '--force'    => $this->input->getOption('force'),
            '--seed'     => $this->input->getOption('seed'),
        ];

        return $this->call('migrate', $options);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['database', null, InputOption::VALUE_OPTIONAL, 'The database connection to use.'],
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production.'],
            ['seed', null, InputOption::VALUE_NONE, 'Indicates if the seed task should be re-run.'],
        ];
    }
}
