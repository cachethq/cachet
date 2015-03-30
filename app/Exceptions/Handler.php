<?php namespace CachetHQ\Cachet\Exceptions;

use CachetHQ\Cachet\Repositories\InvalidModelValidationException;
use Exception;
use GrahamCampbell\Exceptions\ExceptionHandler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException',
    ];

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception               $e
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($request->is('api*')) {
            if ($e instanceof InvalidModelValidationException) {
                return Response::make(['status_code' => 400, 'message' => 'Bad Request'], 400);
            }

            if ($e instanceof ModelNotFoundException) {
                return Response::make(['status_code' => 404, 'error' => 'Resource not found'], 404);
            }
        }

        return parent::render($request, $e);
    }
}
