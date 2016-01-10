@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.component.html-preheader', ['app_name' => $app_name]) !!}
@stop

@section('content')
{!! trans('cachet.subscriber.email.component.html-preheader', ['app_name' => $app_name]) !!}

<p>The component <strong>{{ $component_name }}</strong> has seen a status change. The component is now at <strong>{{ $component_human_status }}</strong>.</p>

@if($show_support)
<p>{!! trans('cachet.powered_by', ['app' => $app_name]) !!}</p>
@endif
<p>
    <small><a href="{{ $unsubscribe_link }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></small>
</p>
@stop
