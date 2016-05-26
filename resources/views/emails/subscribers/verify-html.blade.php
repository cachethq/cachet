@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.verify.html-preheader', ['app_name' => $app_name]) !!}
@stop

@section('content')
{!! trans('cachet.subscriber.email.verify.html', ['app_name' => $app_name, 'link' => $link]) !!}

@if($show_support)
<p>{!! trans('cachet.powered_by', ['app' => $app_name]) !!}</p>
@endif
@stop
