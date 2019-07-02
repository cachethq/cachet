@component('mail::message')
# {{ trans('notifications.schedule.update.mail.title') }}

{{ $content }}

Thanks,<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent
