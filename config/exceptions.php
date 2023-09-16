<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Exceptions.
 *
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Transformers
    |--------------------------------------------------------------------------
    |
    | Here are each of the exception transformers setup for your application.
    |
    | This allows you to turn your exceptions into other exceptions such as
    | http exceptions for perfect results when passed to the displayers. Note
    | that this list is processed in order and subsequent transformers can
    | still modify the results of previous ones if required.
    |
    */

    'transformers' => [
        //GrahamCampbell\Exceptions\Transformer\BadHeadersTransformer::class,
        //GrahamCampbell\Exceptions\Transformer\BadHostTransformer::class,
        GrahamCampbell\Exceptions\Transformer\AuthTransformer::class,
        GrahamCampbell\Exceptions\Transformer\CsrfTransformer::class,
        GrahamCampbell\Exceptions\Transformer\ModelTransformer::class,
        CachetHQ\Cachet\Exceptions\Transformers\BusTransformer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Exception Displayers
    |--------------------------------------------------------------------------
    |
    | Here are each of the exception displayers setup for your application.
    |
    | These displayers are sorted by priority. Note that when we are in debug
    | mode, we will select the first valid displayer from the list, and when we
    | are not in debug mode, we'll filter out all verbose displayers, then
    | select the first valid displayer from the new list.
    |
    */

    'displayers' => [
        CachetHQ\Cachet\Exceptions\Displayers\JsonValidationDisplayer::class,
        CachetHQ\Cachet\Exceptions\Displayers\MaintenanceDisplayer::class,
        CachetHQ\Cachet\Exceptions\Displayers\RedirectDisplayer::class,
        CachetHQ\Cachet\Exceptions\Displayers\SettingsDisplayer::class,
        CachetHQ\Cachet\Exceptions\Displayers\ThrottleDisplayer::class,
        GrahamCampbell\Exceptions\Displayer\DebugDisplayer::class,
        // GrahamCampbell\Exceptions\Displayer\ViewDisplayer::class,
        GrahamCampbell\Exceptions\Displayer\HtmlDisplayer::class,
        GrahamCampbell\Exceptions\Displayer\JsonDisplayer::class,
        GrahamCampbell\Exceptions\Displayer\JsonApiDisplayer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Displayer Filters
    |--------------------------------------------------------------------------
    |
    | Here are each of the filters for the displayers.
    |
    | This allows you to apply filters to your displayers in order to work out
    | which displayer to use for each exception. This includes things like
    | content type negotiation.
    |
    */

    'filters' => [
        CachetHQ\Cachet\Exceptions\Filters\ApiFilter::class,
        GrahamCampbell\Exceptions\Filter\VerboseFilter::class,
        GrahamCampbell\Exceptions\Filter\CanDisplayFilter::class,
        GrahamCampbell\Exceptions\Filter\ContentTypeFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Displayer
    |--------------------------------------------------------------------------
    |
    | Here you may define the default displayer for your application.
    |
    | This displayer will be used if your filters have filtered out all the
    | displayers, otherwise leaving us unable to displayer the exception.
    |
    */

    'default' => GrahamCampbell\Exceptions\Displayer\HtmlDisplayer::class,

    /*
    |--------------------------------------------------------------------------
    | Exception Levels
    |--------------------------------------------------------------------------
    |
    | Here are each of the log levels for the each exception.
    |
    | If an exception passes an instance of test for each key, then the log
    | level used is the value associated with each key.
    |
    */

    'levels' => [
        Illuminate\Auth\Access\AuthorizationException::class                           => 'warning',
        Illuminate\Database\Eloquent\ModelNotFoundException::class                     => 'warning',
        Illuminate\Session\TokenMismatchException::class                               => 'notice',
        //Symfony\Component\HttpFoundation\Exception\RequestExceptionInterface::class    => 'notice',
        //Symfony\Component\HttpKernel\Exception\NotFoundHttpException::class            => 'notice',
        //Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException::class => 'error',
        Symfony\Component\HttpKernel\Exception\HttpExceptionInterface::class           => 'warning',
        Exception::class                                                               => 'error',
        Throwable::class                                                               => 'critical',
    ],

];
