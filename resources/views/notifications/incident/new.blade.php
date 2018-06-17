@component('mail::message')
# {{ trans('notifications.incident.new.mail.greeting', ['app_name' => Config::get('setting.app_name')]) }}

{{ $incident->message }}

@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::subcopy')
[{{ $unsubscribeText }}]({{ $unsubscribeUrl }}) &mdash; [{{ $manageSubscriptionText }}]({{ $manageSubscriptionUrl }})
@endcomponent

@endcomponent
