{!! trans('cachet.subscriber.email.component.text', ['app_name' => $app_name]) !!}

The component {{ $component_name }} has seen a status change. The component is now at {{ $component_human_status }}.

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif

{!! trans('cachet.subscriber.email.unsuscribe') !!} {{ $unsubscribe_link }}
