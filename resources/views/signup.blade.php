@extends('layout.master')

@section('title', trans('cachet.signup.title').' | '.$siteTitle)

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="{{ cachet_route('status-page') }}"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@if($appBanner)
<div class="row app-banner">
    <div class="col-md-12 text-center">
        @if($appDomain)
        <a href="{{ $appDomain }}"><img src="data:{{ $appBannerType }};base64, {{ $appBanner }}" class="banner-image img-responsive"></a>
        @else
        <img src="data:{{ $appBannerType }};base64, {{ $appBanner }}" class="banner-image img-responsive">
        @endif
    </div>
</div>
@endif

@include('partials.errors')

<div class="panel panel-message">
    <div class="panel-heading">
        <strong>{{ trans('cachet.signup.title') }}</strong>
    </div>
    <div class="panel-body">
        <form action="{{ cachet_route('signup.invite', ['code' => $code]) }}" method="post" class="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="username">{{ trans('cachet.signup.username') }}</label>
                <input class="form-control" type="text" name="username" value="{{ $username }}" placeholder="{{ trans('cachet.signup.username') }}">
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cachet.signup.email') }}</label>
                <input class="form-control" type="email" name="email" value="{{ $email }}" placeholder="{ trans('cachet.signup.email') }}">
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cachet.signup.password') }}</label>
                <input class="form-control" type="password" name="password" placeholder="{{ trans('cachet.signup.password') }}">
            </div>
            <button type="submit" class="btn btn-success">{{ trans('forms.signup') }}</button>
        </form>
    </div>
</div>
@stop

@section('bottom-content')
@include('partials.footer')
@stop
