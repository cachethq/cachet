<?php

namespace CachetHQ\Cachet\Bus\Commands\System;


final class SetupMailCommand
{
    /**
     * @var array
     */
    public $config;

    /**
     * Create a setup mail command instance.
     *
     * @param $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }



}
