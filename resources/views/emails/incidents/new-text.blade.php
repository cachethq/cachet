{!! trans('cachet.subscriber.email.incident.text', ['app_name' => Setting::get('app_name')]) !!}

{!! $status !!}
@if($component_name)
({{ $component_name }})
@endif

{!! $textContent !!}

@if(Setting::get('show_support'))
{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}
@endif

{!! trans('cachet.subscriber.email.unsuscribe') !!} {{ $unsubscribeLink }}
