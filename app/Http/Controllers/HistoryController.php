<?php

namespace CachetHQ\Cachet\Http\Controllers;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriptionCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Subscription;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AltThree\Badger\Facades\Badger;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Http\Controllers\Api\AbstractApiController;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

/**
 * This is the history controller.
 *
 * @author Nicolà Schnieper <nicola.schnieper@podgroup.com>
 */
class HistoryController extends Controller
{
    /**
     * Show the history page.
     *
     * @return \Illuminate\View\View
     */
    public function showHistory()
    {
        //CHECK IF SHOULD BE VISIBLE
        //TODO needs middleware auth?
        $incidentVisibility = Auth::check() ? 0 : 1;

        $monthsToShow = 12; //TODO put this in config

        $allIncidents = Incident::notScheduled()->where('visible', '>=', $incidentVisibility)
        ->orderBy('scheduled_at', 'desc')->orderBy('created_at', 'desc')->get()
        ->groupBy(function (Incident $incident) { //group by day
            return app(DateFactory::class)->make($incident->is_scheduled ? $incident->scheduled_at : $incident->created_at)->toDateString();
        })
        ->groupBy(function ($value, $key) { //group by month
            return app(DateFactory::class)->make($key)->format('F Y');
        }, true)->slice(0, $monthsToShow);

        return View::make('history.history')
            ->withAllIncidents($allIncidents); //TODO add page forward/backward
    }
}
