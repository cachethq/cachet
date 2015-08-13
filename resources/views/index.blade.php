@extends('layout.master')

@section('content')
    @if($subscribersEnabled)
    <div class="pull-right">
        <p><a class="btn btn-success btn-outline" href="{{ route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a></p>
    </div>
    @endif

    <div class="clearfix"></div>

    <div class="section-messages">
        @include('dashboard.partials.errors')
    </div>

    @if($bannerImage = Setting::get('app_banner'))
    <div class="row app-banner">
        <div class="col-md-12 text-center">
            <?php $bannerType = Setting::get('app_banner_type') ?>
            @if($app_url = Setting::get('app_domain'))
            <a href="{{ $app_url }}"><img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive"></a>
            @else
            <img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive">
            @endif
        </div>
    </div>
    @endif

    <div class="section-status">
        <div class="alert alert-{{ $systemStatus }}">{{ $systemMessage }}</div>
    </div>

    @if($about_app)
    <div class="about-app">
        <h1>{{ trans('cachet.about_this_site') }}</h1>
        <p>{!! $about_app !!}</p>
    </div>
    @endif

    @if(!$component_groups->isEmpty() || !$ungrouped_components->isEmpty())
    <div class="section-components">
        @include('partials.components')
    </div>
    @endif

    @if($display_metrics && Setting::get('display_graphs'))
    <div class="section-metrics">
        @include('partials.metrics')
    </div>
    @endif

    @if(!$scheduled_maintenance->isEmpty())
    <div class="section-scheduled">
        @include('partials.schedule')
    </div>
    @endif

    <div class="section-timeline">
        <h1>{{ trans('cachet.incidents.past') }}</h1>
        @foreach($all_incidents as $date => $incidents)
        @include('partials.incidents', [compact($date), compact($incidents)])
        @endforeach
    </div>

    <nav>
        <ul class="pager">
            @if($can_page_backward)
            <li class="previous">
                <a href="{{ route('status-page') }}?start_date={{ $previous_date }}">
                    <span aria-hidden="true">&larr;</span> {{ trans('cachet.incidents.previous_week') }}
                </a>
            </li>
            @endif
            @if($can_page_forward)
            <li class="next">
                <a href="{{ route('status-page') }}?start_date={{ $next_date }}">
                    {{ trans('cachet.incidents.next_week') }} <span aria-hidden="true">&rarr;</span>
                </a>
            </li>
            @endif
        </ul>
    </nav>
@stop
