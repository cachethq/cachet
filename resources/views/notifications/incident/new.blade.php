@component('mail::message')
# {{ trans('notifications.incident.new.mail.greeting', ['app_name' => Config::get('setting.app_name')]) }}

{{ $incident->message }}

@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent

Thanks,<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent
