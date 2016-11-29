{{ trans('dashboard.settings.mail.email.body') }}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif
