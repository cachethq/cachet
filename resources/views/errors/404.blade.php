@extends('layout.error')

@section('content')
    <div class="middle-box text-center">
        <div>
            <img class="logo" height="65" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet">
        </div>
        <h1>{{ trans('errors.not-found.code') }}</h1>
        <h3>{{ trans('errors.not-found.title') }}</h3>

        <div class="error-desc">
            <p>{{ trans('errors.not-found.message') }}</p>
            <br>
            <p>
                <a href="/" class="btn btn-default btn-lg">{{ trans('errors.not-found.link') }}</a>
            </p>
        </div>
    </div>
@stop
