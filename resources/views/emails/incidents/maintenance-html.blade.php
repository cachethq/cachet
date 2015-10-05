@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.maintenance.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
@stop

@section('content')
    {!! trans('cachet.subscriber.email.maintenance.html', ['app_name' => Setting::get('app_name')]) !!}

    <p>{{ $scheduled_at }}</p>

    <p>
        {!! $status !!}
    </p>

    <p>
        {!! $html_content !!}
    </p>

    @if(Setting::get('show_support'))
    <p>{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}</p>
    @endif
    <p>
        <small><a href="{{ $unsubscribe_link }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></small>
    </p>
@stop
