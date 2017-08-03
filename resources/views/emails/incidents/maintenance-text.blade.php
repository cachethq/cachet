{!! $name !!}

{!! $status !!}
{!! $text_content !!}
{!! $timestamp !!}

{!! trans('cachet.subscriber.email.manage') !!} {{ $manage_link }}

{!! trans('cachet.subscriber.email.unsubscribe') !!} {{ $unsubscribe_link }}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif
