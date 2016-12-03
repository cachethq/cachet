<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Exceptions\Displayers;

use Exception;
use GrahamCampbell\Exceptions\Displayers\DisplayerInterface;
use GrahamCampbell\Exceptions\ExceptionInfo;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

/**
 * This is the dashboard displayer class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DashboardDisplayer implements DisplayerInterface
{
    /**
     * The exception info instance.
     *
     * @var \GrahamCampbell\Exceptions\ExceptionInfo
     */
    protected $info;

    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * The view factory instance.
     *
     * @var \Illuminate\Contracts\View\Factory
     */
    protected $view;

    /**
     * Create a new dashboard displayer instance.
     *
     * @param \GrahamCampbell\Exceptions\ExceptionInfo $info
     * @param \Illuminate\Http\Request                 $request
     * @param \Illuminate\Contracts\View\Factory       $view
     *
     * @return void
     */
    public function __construct(ExceptionInfo $info, Request $request, Factory $view)
    {
        $this->info = $info;
        $this->request = $request;
        $this->view = $view;
    }

    /**
     * Get the error response associated with the given exception.
     *
     * @param \Exception $exception
     * @param string     $id
     * @param int        $code
     * @param string[]   $headers
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function display(Exception $exception, $id, $code, array $headers)
    {
        $info = $this->info->generate($exception, $id, $code);

        return new Response($this->render($info), $code, array_merge($headers, ['Content-Type' => $this->contentType()]));
    }

    /**
     * Render the page with given info.
     *
     * @param array $info
     *
     * @return string
     */
    protected function render(array $info)
    {
        return $this->view->make("errors.dashboard.{$info['code']}", $info)->render();
    }

    /**
     * Get the supported content type.
     *
     * @return string
     */
    public function contentType()
    {
        return 'text/html';
    }

    /**
     * Can we display the exception?
     *
     * @param \Exception $original
     * @param \Exception $transformed
     * @param int        $code
     *
     * @return bool
     */
    public function canDisplay(Exception $original, Exception $transformed, $code)
    {
        $display = $transformed instanceof HttpExceptionInterface && $transformed->getStatusCode() === 404;

        return $display && $this->request->is('dashboard*');
    }

    /**
     * Do we provide verbose information about the exception?
     *
     * @return bool
     */
    public function isVerbose()
    {
        return false;
    }
}
