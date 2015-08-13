{!! trans('cachet.subscriber.email.maintenance.text', ['app_name' => Setting::get('app_name')]) !!}

{{ $scheduled_at }}

{!! $status !!}

{!! $textContent !!}

@if(Setting::get('show_support'))
{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}
@endif

{!! trans('cachet.subscriber.email.unsubscribe') !!} {{ $unsubscribeLink }}
