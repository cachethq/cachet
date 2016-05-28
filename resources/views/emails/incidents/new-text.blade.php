{!! $name !!}

{!! $status !!}
{!! $text_content !!}
{!! $timestamp !!}

@if($has_component)
({{ $component_name }})
@endif

{!! trans('cachet.subscriber.email.manage') !!} {{ $manage_link }}

{!! trans('cachet.subscriber.email.unsuscribe') !!} {{ $unsubscribe_link }}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif
