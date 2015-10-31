@extends('layout.emails')

@section('preheader')
{!! trans('cachet.users.email.invite.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
@stop

@section('content')
    {!! trans('cachet.users.email.invite.html', ['app_name' => Setting::get('app_name'), 'link' => $link]) !!}

    @if(Setting::get('show_support'))
    <p>{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}</p>
    @endif
@stop
