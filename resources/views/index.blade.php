@extends('layout.master')

@section('content')
    <div class="pull-right">
        <p><a class="btn btn-success btn-outline" href="{{ route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a></p>
    </div>

    <div class="clearfix"></div>

    @include('partials.dashboard.errors')

    @if($bannerImage = Setting::get('app_banner'))
    <div class="row app-banner">
        <div class="col-md-12 text-center">
            <?php $bannerType = Setting::get('app_banner_type') ?>
            @if($appUrl = Setting::get('app_domain'))
            <a href="{{ $appUrl }}"><img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive"></a>
            @else
            <img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive">
            @endif
        </div>
    </div>
    @endif

    <div class="alert alert-{{ $systemStatus }}">{{ $systemMessage }}</div>

    @if($aboutApp)
    <div class="about-app">
        <h1>{{ trans('cachet.about_this_site') }}</h1>
        <p>{!! $aboutApp !!}</p>
    </div>
    @endif

    @include('partials.components')

    @if($displayMetrics && Setting::get('display_graphs'))
    @include('partials.metrics')
    @endif

    @if(!$scheduledMaintenance->isEmpty())
    @include('partials.schedule')
    @endif

    <h1>{{ trans('cachet.incidents.past') }}</h1>
    @foreach($allIncidents as $date => $incidents)
    @include('partials.incidents', [compact($date), compact($incidents)])
    @endforeach
    <hr>

    <nav>
        <ul class="pager">
            @if($canPageBackward)
            <li class="previous">
                <a href="{{ route('status-page') }}?start_date={{ $previousDate }}">
                    <span aria-hidden="true">&larr;</span> {{ trans('cachet.incidents.previous_week') }}
                </a>
            </li>
            @endif
            @if($canPageForward)
            <li class="next">
                <a href="{{ route('status-page') }}?start_date={{ $nextDate }}">
                    {{ trans('cachet.incidents.next_week') }} <span aria-hidden="true">&rarr;</span>
                </a>
            </li>
            @endif
        </ul>
    </nav>
@stop
