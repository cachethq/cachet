@extends('layout.master')

@section('content')
    <div class="pull-right">
        @if($subscribersEnabled)
        <p><a class="btn btn-success btn-outline" href="{{ route('subscribe.subscribe') }}">{{ trans('cachet.subscriber.button') }}</a></p>
        @endif
        <p><a class="btn btn-success btn-outline" href="/"><i class="ion-home"></i></a></p>
    </div>

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

    <h4>{{ formatted_date($incident->created_at) }}</h4>

    @include('partials.incident', ['incident' => $incident, 'with_link' => false])
@stop
