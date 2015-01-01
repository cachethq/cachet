@extends('layout.error')

@section('content')
    <div class="middle-box text-center">
        <div>
            <img class="logo" height="65" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet"/>
        </div>
        <h1>404</h1>
        <h3>{{ trans('cachet.dashboard.not_found') }}</h3>

        <div class="error-desc">
            <p>{{ trans('cachet.dashboard.not_found_message') }}</p>
            <br/>
            <p>
                <a href='/' class='btn btn-default btn-lg'>{{ trans('cachet.dashboard.not_found_link') }}</a>
            </p>
        </div>
    </div>
@stop
