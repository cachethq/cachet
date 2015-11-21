@extends('layout.master')

@section('content')
    <div class="pull-right">
        <p><a class="btn btn-success btn-outline" href="/"><i class="ion-home"></i></a></p>
    </div>

    <div class="clearfix"></div>

    @if($bannerImage = Setting::get('app_banner'))
    <div class="row app-banner">
        <div class="col-md-12 text-center">
            <?php $bannerType = Setting::get('app_banner_type') ?>
            @if(isset($app_domain))
            <a href="{{ $app_domain }}"><img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive"></a>
            @else
            <img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive">
            @endif
        </div>
    </div>
    @endif

    @include('dashboard.partials.errors')

    <div class="panel panel-meassage">
        <div class="panel-heading">
            <strong>{{ trans('cachet.subscriber.subscribe') }}</strong>
        </div>
        <div class="panel-body">
            <form action="{{ route('subscribe.subscribe', [], false) }}" method="post" class="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input class="form-control" type="email" name="email">
                </div>
                <button type="submit" class="btn btn-success">{{ trans('cachet.subscriber.button') }}</button>
            </form>
        </div>
    </div>
@stop
