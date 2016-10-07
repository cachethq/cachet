<?php

namespace CachetHQ\Cachet\Bus\Handlers\Commands\System;


use CachetHQ\Cachet\Bus\Commands\System\SetupMailCommand;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class SetupMailCommandHandler
{
    /**
     * Handle the mail setup command.
     * @param SetupMailCommand $command
     */
    public function handle(SetupMailCommand $command)
    {
        Artisan::call("config:clear");
        $config = $command->config;
        foreach ($config as $key => $value) {
            write_env($key, $value);
        }
        $this->verify($config['mail_address']);
    }

    protected function verify($email)
    {
        Mail::raw("Test mail", function ($massage) use ($email) {
            $massage->to($email);
            $massage->from($email);
        });
    }
}