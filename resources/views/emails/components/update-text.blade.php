{!! trans('cachet.subscriber.email.component.text', ['component_name' => $component_name, 'component_human_status' => $component_human_status, 'app_name' => $app_name]) !!}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif

{!! trans('cachet.subscriber.email.unsubscribe') !!} {{ $unsubscribe_link }}
