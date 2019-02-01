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

use CachetHQ\Cachet\Models\User;
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Contracts\Events\Dispatcher;

/**
 * This is the install command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class InstallCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Cachet';

    /**
     * The events instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected $events;

    /**
     * Create a new command instance.
     *
     * @param Dispatcher $events
     */
    public function __construct(Dispatcher $events)
    {
        $this->events = $events;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->confirm('Do you want to configure Cachet before installing?')) {
            $this->configureEnvironmentFile();
            $this->configureKey();
            $this->configureDatabase();
            $this->configureDrivers();
            $this->configureMail();
            $this->configureCachet();
            $this->configureUser();
        }

        $this->line('Installing Cachet...');

        $this->events->fire('command.installing', $this);
        $this->events->fire('command.generatekey', $this);
        $this->events->fire('command.cacheconfig', $this);
        $this->events->fire('command.cacheroutes', $this);
        $this->events->fire('command.publishvendors', $this);
        $this->events->fire('command.runmigrations', $this);
        $this->events->fire('command.runseeding', $this);
        $this->events->fire('command.updatecache', $this);
        $this->events->fire('command.linkstorage', $this);
        $this->events->fire('command.extrastuff', $this);
        $this->events->fire('command.installed', $this);

        $this->info('Cachet is installed ⚡');
    }

    /**
     * Copy the environment file.
     *
     * @return void
     */
    protected function configureEnvironmentFile()
    {
        $dir = app()->environmentPath();
        $file = app()->environmentFile();
        $path = "{$dir}/{$file}";

        if (file_exists($path)) {
            $this->line('Environment file already exists. Moving on.');

            return;
        }

        copy("$path.example", $path);
    }

    /**
     * Generate the app key.
     *
     * @return void
     */
    protected function configureKey()
    {
        $this->call('key:generate');
    }

    /**
     * Configure the database.
     *
     * @param array $default
     *
     * @return void
     */
    protected function configureDatabase(array $default = [])
    {
        $config = array_merge([
            'DB_DRIVER'   => null,
            'DB_HOST'     => null,
            'DB_DATABASE' => null,
            'DB_USERNAME' => null,
            'DB_PASSWORD' => null,
            'DB_PORT'     => null,
            'DB_PREFIX'   => null,
        ], $default);

        $config['DB_DRIVER'] = $this->choice('Which database driver do you want to use?', [
            'mysql'      => 'MySQL',
            'pgsql'      => 'PostgreSQL',
            'sqlite'     => 'SQLite',
        ], $config['DB_DRIVER']);

        if ($config['DB_DRIVER'] === 'sqlite') {
            $config['DB_DATABASE'] = $this->ask('Please provide the full path to your SQLite file.', $config['DB_DATABASE']);
        } else {
            $config['DB_HOST'] = $this->ask("What is the host of your {$config['DB_DRIVER']} database?", $config['DB_HOST']);
            if ($config['DB_HOST'] === 'localhost' && $config['DB_DRIVER'] === 'mysql') {
                $this->warn("Using 'localhost' will result in the usage of a local unix socket. Use 127.0.0.1 if you want to connect over TCP");
            }

            $config['DB_DATABASE'] = $this->ask('What is the name of the database that Cachet should use?', $config['DB_DATABASE']);

            $config['DB_USERNAME'] = $this->ask('What username should we connect with?', $config['DB_USERNAME']);

            $config['DB_PASSWORD'] = $this->secret('What password should we connect with?', $config['DB_PASSWORD']);

            $config['DB_PORT'] = $config['DB_DRIVER'] === 'mysql' ? 3306 : 5432;
            if ($this->confirm('Is your database listening on a non-standard port number?')) {
                $config['DB_PORT'] = $this->anticipate('What port number is your database using?', [3306, 5432], $config['DB_PORT']);
            }
        }

        if ($this->confirm('Do you want to use a prefix on the table names?')) {
            $config['DB_PREFIX'] = $this->ask('Please enter the prefix now...', $config['DB_PREFIX']);
        }

        // Format the settings ready to display them in the table.
        $this->formatConfigsTable($config);

        if (!$this->confirm('Are these settings correct?')) {
            return $this->configureDatabase($config);
        }

        foreach ($config as $setting => $value) {
            $this->writeEnv($setting, $value);
        }
    }

    /**
     * Configure other drivers.
     *
     * @param array $default
     *
     * @return void
     */
    protected function configureDrivers(array $default = [])
    {
        $config = array_merge([
            'CACHE_DRIVER'   => null,
            'SESSION_DRIVER' => null,
            'QUEUE_DRIVER'   => null,
        ], $default);

        // Format the settings ready to display them in the table.
        $this->formatConfigsTable($config);

        $config['CACHE_DRIVER'] = $this->choice('Which cache driver do you want to use?', [
            'apc'       => 'APC(u)',
            'array'     => 'Array',
            'database'  => 'Database',
            'file'      => 'File',
            'memcached' => 'Memcached',
            'redis'     => 'Redis',
        ], $config['CACHE_DRIVER']);

        // We need to configure Redis.
        if ($config['CACHE_DRIVER'] === 'redis') {
            $this->configureRedis();
        }

        $config['SESSION_DRIVER'] = $this->choice('Which session driver do you want to use?', [
            'apc'       => 'APC(u)',
            'array'     => 'Array',
            'database'  => 'Database',
            'file'      => 'File',
            'memcached' => 'Memcached',
            'redis'     => 'Redis',
        ], $config['SESSION_DRIVER']);

        // We need to configure Redis.
        if ($config['SESSION_DRIVER'] === 'redis') {
            $this->configureRedis();
        }

        $config['QUEUE_DRIVER'] = $this->choice('Which queue driver do you want to use?', [
            'null'       => 'None',
            'sync'       => 'Synchronous',
            'database'   => 'Database',
            'beanstalkd' => 'Beanstalk',
            'sqs'        => 'Amazon SQS',
            'redis'      => 'Redis',
        ], $config['QUEUE_DRIVER']);

        // We need to configure Redis, but only if the cache driver wasn't redis.
        if ($config['QUEUE_DRIVER'] === 'redis' && ($config['SESSION_DRIVER'] !== 'redis' || $config['CACHE_DRIVER'] !== 'redis')) {
            $this->configureRedis();
        }

        // Format the settings ready to display them in the table.
        $this->formatConfigsTable($config);

        if (!$this->confirm('Are these settings correct?')) {
            return $this->configureDrivers($config);
        }

        foreach ($config as $setting => $value) {
            $this->writeEnv($setting, $value);
        }
    }

    /**
     * Configure mail.
     *
     * @param array $config
     *
     * @return void
     */
    protected function configureMail(array $config = [])
    {
        $config = array_merge([
            'MAIL_DRIVER'     => null,
            'MAIL_HOST'       => null,
            'MAIL_PORT'       => null,
            'MAIL_USERNAME'   => null,
            'MAIL_PASSWORD'   => null,
            'MAIL_ADDRESS'    => null,
            'MAIL_NAME'       => null,
            'MAIL_ENCRYPTION' => null,
        ], $config);

        // Don't continue with these settings if we're not interested in notifications.
        if (!$this->confirm('Do you want Cachet to send mail notifications?')) {
            return;
        }

        $config['MAIL_DRIVER'] = $this->choice('What driver do you want to use to send notifications?', [
            'smtp'      => 'SMTP',
            'mail'      => 'Mail',
            'sendmail'  => 'Sendmail',
            'mailgun'   => 'Mailgun',
            'mandrill'  => 'Mandrill',
            'ses'       => 'Amazon SES',
            'sparkpost' => 'SparkPost',
            'log'       => 'Log (Testing)',
        ]);

        if (!$config['MAIL_DRIVER'] === 'log') {
            if ($config['MAIL_DRIVER'] === 'smtp') {
                $config['MAIL_HOST'] = $this->ask('Please supply your mail server host');
            }

            $config['MAIL_ADDRESS'] = $this->ask('What email address should we send notifications from?');
            $config['MAIL_USERNAME'] = $this->ask('What username should we connect as?');
            $config['MAIL_PASSWORD'] = $this->secret('What password should we connect with?');
        }

        // Format the settings ready to display them in the table.
        $this->formatConfigsTable($config);

        if (!$this->confirm('Are these settings correct?')) {
            return $this->configureMail($config);
        }

        foreach ($config as $setting => $value) {
            $this->writeEnv($setting, $value);
        }
    }

    /**
     * Configure Cachet.
     *
     * @param array $config
     *
     * @return void
     */
    protected function configureCachet(array $config = [])
    {
        $config = [];
        if ($this->confirm('Do you wish to use Cachet Beacon?')) {
            $config['CACHET_BEACON'] = 'true';
        }

        if ($this->confirm('Do you wish to use Emoji? This requires a GitHub oAuth Token!')) {
            $config['GITHUB_TOKEN'] = $this->ask('Please enter your GitHub oAuth Token');
            $config['CACHET_EMOJI'] = 'true';
        }

        foreach ($config as $setting => $value) {
            $this->writeEnv($setting, $value);
        }
    }

    /**
     * Configure the first user.
     *
     * @return void
     */
    protected function configureUser()
    {
        if (!$this->confirm('Do you want to create an admin user?')) {
            return;
        }

        // We need to refresh the config to get access to the newly connected database.
        $this->getFreshConfiguration();

        // Now we need to install the application.
        // $this->call('cachet:install');

        $user = [
            'username' => $this->ask('Please enter your username'),
            'email'    => $this->ask('Please enter your email'),
            'password' => $this->secret('Please enter your password'),
            'level'    => User::LEVEL_ADMIN,
        ];

        User::create($user);
    }

    /**
     * Configure the redis connection.
     *
     * @return void
     */
    protected function configureRedis()
    {
        $config = [
            'REDIS_HOST'     => null,
            'REDIS_DATABASE' => null,
            'REDIS_PORT'     => null,
        ];

        $config['REDIS_HOST'] = $this->ask('What is the host of your redis server?');
        $config['REDIS_DATABASE'] = $this->ask('What is the name of the database that Cachet should use?');
        $config['REDIS_PORT'] = $this->ask('What port should Cachet use?', 6379);

        foreach ($config as $setting => $value) {
            $this->writeEnv($setting, $value);
        }
    }

    /**
     * Format the configs into a pretty table that we can easily read.
     *
     * @param array $config
     *
     * @return void
     */
    protected function formatConfigsTable(array $config)
    {
        $configRows = [];

        foreach ($config as $setting => $value) {
            $configRows[] = compact('setting', 'value');
        }

        $this->table(['Setting', 'Value'], $configRows);
    }

    /**
     * Boot a fresh copy of the application configuration.
     *
     * @return void
     */
    protected function getFreshConfiguration()
    {
        $app = require $this->laravel->bootstrapPath().'/app.php';
        $app->make(Kernel::class)->bootstrap();
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

            $envFileContents = file_get_contents($path);
            $envFileContents = str_replace("{$envKey}={$envValue}", "{$envKey}={$value}", $envFileContents, $count);
            if ($count < 1 && $envValue === 'null') {
                $envFileContents = str_replace("{$envKey}=", "{$envKey}={$value}", $envFileContents);
            }
            file_put_contents($path, $envFileContents);
        } catch (InvalidPathException $e) {
            throw $e;
        }
    }
}
