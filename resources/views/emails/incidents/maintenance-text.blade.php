{!! trans('cachet.subscriber.email.maintenance.text', ['app_name' => $app_name]) !!}

{{ $scheduled_at }}

{!! $status !!}

{!! $text_content !!}

{!! trans('cachet.subscriber.email.manage') !!} {{ $manage_link }}

{!! trans('cachet.subscriber.email.unsubscribe') !!} {{ $unsubscribe_link }}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif
