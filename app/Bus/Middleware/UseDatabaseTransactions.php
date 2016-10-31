<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

/**
 * This is the use database transactions bus middleware class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UseDatabaseTransactions
{
    /**
     * Handle the current command in the pipeline.
     *
     * @param mixed    $command
     * @param \Closure $next
     *
     * @return bool
     */
    public function handle($command, Closure $next)
    {
        return DB::transaction(function () use ($command, $next) {
            return $next($command);
        });
    }
}
