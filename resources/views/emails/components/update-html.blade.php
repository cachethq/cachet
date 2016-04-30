@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.component.html-preheader', ['app_name' => $app_name]) !!}
@stop

@section('content')
{!! trans('cachet.subscriber.email.component.html', ['component_name' => $component_name, 'component_human_status' => $component_human_status, 'app_name' => $app_name]) !!}

@if($show_support)
<p>{!! trans('cachet.powered_by', ['app' => $app_name]) !!}</p>
@endif
<p>
    <small><a href="{{ $manage_link }}">{!! trans('cachet.subscriber.email.manage') !!}</a></small>
</p>
@stop
