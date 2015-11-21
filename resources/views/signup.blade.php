@extends('layout.master')

@section('content')
    <div class="pull-right">
        <p><a class="btn btn-success btn-outline" href="/"><i class="ion-home"></i></a></p>
    </div>

    <div class="clearfix"></div>

    @if($app_banner)
    <div class="row app-banner">
        <div class="col-md-12 text-center">
            @if($app_domain)
            <a href="{{ $app_domain }}"><img src="data:{{ $app_banner_type }};base64, {{ $app_banner }}" class="banner-image img-responsive"></a>
            @else
            <img src="data:{{ $app_banner_type }};base64, {{ $app_banner }}" class="banner-image img-responsive">
            @endif
        </div>
    </div>
    @endif

    @include('dashboard.partials.errors')

    <div class="panel panel-meassage">
        <div class="panel-heading">
            <strong>{{ trans('cachet.signup.title') }}</strong>
        </div>
        <div class="panel-body">
            <form action="{{ route('signup.invite', ['code' => $code]) }}" method="post" class="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="username">{{ trans('cachet.signup.username') }}</label>
                    <input class="form-control" type="text" name="username" value="{{ $username }}">
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('cachet.signup.email') }}</label>
                    <input class="form-control" type="email" name="email" value="{{ $email }}">
                </div>
                <div class="form-group">
                    <label for="password">{{ trans('cachet.signup.password') }}</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-success">{{ trans('forms.signup') }}</button>
            </form>
        </div>
    </div>
@stop
