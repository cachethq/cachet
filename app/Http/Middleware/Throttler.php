<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

/**
 * This is the throttler middleware class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Throttler
{
    /**
     * The rate limiter instance.
     *
     * @var \Illuminate\Cache\RateLimiter
     */
    protected $limiter;

    /**
     * Create a new throttler middleware instance.
     *
     * @param \Illuminate\Cache\RateLimiter $limiter
     *
     * @return void
     */
    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param int|string               $limit
     * @param int|string               $decay
     *
     * @throws \Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $limit = 60, $decay = 1)
    {
        return $this->safeHandle($request, $next, (int) $limit, (int) $decay);
    }

    /**
     * Handle an incoming request, with correct types.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param int                      $limit
     * @param int                      $decay
     *
     * @throws \Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException
     *
     * @return mixed
     */
    protected function safeHandle(Request $request, Closure $next, int $limit, int $decay)
    {
        $key = $request->fingerprint();

        if ($this->limiter->tooManyAttempts($key, $limit, $decay)) {
            throw $this->buildException($key, $limit);
        }

        $this->limiter->hit($key, $decay);

        $response = $next($request);

        $response->headers->add($this->getHeaders($key, $limit));

        return $response;
    }

    /**
     * Create a too many requests http exception.
     *
     * @param string $key
     * @param int    $limit
     *
     * @return \Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException
     */
    protected function buildException(string $key, int $limit)
    {
        $after = $this->limiter->availableIn($key);
        $exception = new TooManyRequestsHttpException($after, 'Rate limit exceeded.');
        $exception->setHeaders($this->getHeaders($key, $limit, $after, $exception->getHeaders()));

        return $exception;
    }

    /**
     * Get the limit header information.
     *
     * @param string   $key
     * @param int      $limit
     * @param int|null $after
     * @param array    $merge
     *
     * @return array
     */
    protected function getHeaders(string $key, int $limit, int $after = null, array $merge = [])
    {
        $remaining = $after === null ? $this->limiter->retriesLeft($key, $limit) : 0;
        $headers = ['X-RateLimit-Limit' => $limit, 'X-RateLimit-Remaining' => $remaining];

        return array_merge($headers, $merge);
    }
}
