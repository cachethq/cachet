<?php

namespace CachetHQ\Cachet\Service;

interface ServiceInterface
{
    public function register();
    public function unregister();
    public function fire($data);
}
