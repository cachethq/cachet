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
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Illuminate\Http\Response;

/**
 * This is the maintenance displayer class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MaintenanceDisplayer implements DisplayerInterface
{
    /**
     * The view factory instance.
     *
     * @var \Illuminate\Contracts\View\Factory
     */
    protected $view;

    /**
     * Create a new maintenance displayer instance.
     *
     * @param \Illuminate\Contracts\View\Factory $view
     *
     * @return void
     */
    public function __construct(Factory $view)
    {
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
        return new Response($this->render(), $code, array_merge($headers, ['Content-Type' => $this->contentType()]));
    }

    /**
     * Render the page.
     *
     * @return string
     */
    protected function render()
    {
        return $this->view->make('errors.maintenance')->render();
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
        return $transformed instanceof MaintenanceModeException;
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
