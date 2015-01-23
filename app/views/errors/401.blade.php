@extends('layout.error')

@section('content')
    <div class="middle-box text-center">
        <div>
            <img class="logo" height="65" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet">
        </div>
        <h1>{{ trans('errors.unauthorized.code') }}</h1>
        <h3>{{ trans('errors.unauthorized.title') }}</h3>

        <div class="error-desc">
            <p>{{ trans('errors.unauthorized.message') }}</p>
            <br>
            <p>
                <a href="/" class="btn btn-default btn-lg">{{ trans('errors.unauthorized.link') }}</a>
            </p>
        </div>
    </div>
@stop
