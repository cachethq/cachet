{!! trans('cachet.subscriber.email.incident.text', ['app_name' => Setting::get('app_name')]) !!}

{!! $status !!}
@if($has_component)
({{ $component_name }})
@endif

{!! $text_content !!}

@if(Setting::get('show_support'))
{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}
@endif

{!! trans('cachet.subscriber.email.unsuscribe') !!} {{ $unsubscribe_link }}
