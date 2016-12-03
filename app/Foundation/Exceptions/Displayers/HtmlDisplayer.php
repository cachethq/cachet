<?php

/*
 * This file is part of Laravel Exceptions.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Exceptions\Displayers;

use Exception;
use GrahamCampbell\Exceptions\Displayers\DisplayerInterface;
use GrahamCampbell\Exceptions\ExceptionInfo;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

/**
 * This is the html displayer class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class HtmlDisplayer implements DisplayerInterface
{
    /**
     * The exception info instance.
     *
     * @var \GrahamCampbell\Exceptions\ExceptionInfo
     */
    protected $info;

    /**
     * The html template path.
     *
     * @var string
     */
    protected $path;

    /**
     * Create a new html displayer instance.
     *
     * @param \GrahamCampbell\Exceptions\ExceptionInfo $info
     * @param string                                   $path
     *
     * @return void
     */
    public function __construct(ExceptionInfo $info, $path)
    {
        $this->info = $info;
        $this->path = $path;
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
        $content = file_get_contents($this->path);

        $info['home_url'] = asset('/');
        $info['favicon_url'] = asset('favicon.ico');

        foreach ($info as $key => $val) {
            $content = str_replace("{{ $$key }}", $val, $content);
        }

        return $content;
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

        return $display && !$this->request->is('dashboard*');
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
