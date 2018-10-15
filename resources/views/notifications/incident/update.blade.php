@component('mail::message')
# {{ trans('notifications.incident.update.mail.title', ['name' => $incidentName, 'new_status' => $newStatus])  }}

{{ $content }}

Thanks,<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent