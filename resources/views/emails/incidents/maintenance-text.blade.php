{!! trans('cachet.subscriber.email.maintenance.text', ['app_name' => $app_name]) !!}

{{ $scheduled_at }}

{!! $status !!}

{!! $text_content !!}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif

{!! trans('cachet.subscriber.email.unsubscribe') !!} {{ $unsubscribe_link }}
