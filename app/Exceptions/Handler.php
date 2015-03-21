<?php namespace CachetHQ\Cachet\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
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
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Exception $e
     *
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

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
            if ($e instanceof \CachetHQ\Cachet\Repositories\InvalidModelValidationException) {
                return Response::make(['status_code' => 400, 'message' => 'Bad Request'], 400);
            }

            if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return Response::make(['status_code' => 404, 'error' => 'Resource not found'], 404);
            }
        }

        return parent::render($request, $e);
    }
}
